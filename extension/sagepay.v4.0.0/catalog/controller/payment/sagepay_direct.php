<?php
namespace Opencart\Catalog\Controller\Extension\Sagepay\Payment;
class SagepayDirect extends \Opencart\System\Engine\Controller {
	private $error = [];
			
	public function index(): string {
		$this->load->language('extension/sagepay/payment/sagepay_direct');
		
		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];
				
			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		$data['cards'] = array();

		$data['cards'][] = array(
			'text' => 'Visa',
			'value' => 'VISA'
		);

		$data['cards'][] = array(
			'text' => 'MasterCard',
			'value' => 'MC'
		);

		$data['cards'][] = array(
			'text' => 'Visa Delta/Debit',
			'value' => 'DELTA'
		);

		$data['cards'][] = array(
			'text' => 'Solo',
			'value' => 'SOLO'
		);

		$data['cards'][] = array(
			'text' => 'Maestro',
			'value' => 'MAESTRO'
		);

		$data['cards'][] = array(
			'text' => 'Visa Electron UK Debit',
			'value' => 'UKE'
		);

		$data['cards'][] = array(
			'text' => 'American Express',
			'value' => 'AMEX'
		);

		$data['cards'][] = array(
			'text' => 'Diners Club',
			'value' => 'DC'
		);

		$data['cards'][] = array(
			'text' => 'Japan Credit Bureau',
			'value' => 'JCB'
		);

		$data['months'] = array();

		for ($i = 1; $i <= 12; $i++) {
			$data['months'][] = array(
				'text' => strftime('%B', mktime(0, 0, 0, $i, 1, 2000)),
				'value' => sprintf('%02d', $i)
			);
		}

		$today = getdate();

		$data['year_valid'] = array();

		for ($i = $today['year'] - 10; $i < $today['year'] + 1; $i++) {
			$data['year_valid'][] = array(
				'text' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i)),
				'value' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i))
			);
		}

		$data['year_expire'] = array();

		for ($i = $today['year']; $i < $today['year'] + 11; $i++) {
			$data['year_expire'][] = array(
				'text' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i)),
				'value' => strftime('%Y', mktime(0, 0, 0, 1, 1, $i))
			);
		}

		return $this->load->view('extension/sagepay/payment/sagepay_direct', $data);
	}
	
	public function send(): void {
		$this->load->language('extension/sagepay/payment/sagepay_direct');
		
		$this->load->model('checkout/order');
		$this->load->model('extension/sagepay/payment/sagepay_direct');
		$this->load->model('account/order');

		$payment_data = array();

		if ($this->config->get('payment_sagepay_direct_test') == 'live') {
			$url = 'https://live.sagepay.com/gateway/service/vspdirect-register.vsp';
			$payment_data['VPSProtocol'] = '4.00';
		} elseif ($this->config->get('payment_sagepay_direct_test') == 'test') {
			$url = 'https://test.sagepay.com/gateway/service/vspdirect-register.vsp';
			$payment_data['VPSProtocol'] = '4.00';
		}

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$payment_data['ReferrerID'] = 'E511AF91-E4A0-42DE-80B0-09C981A3FB61';
		$payment_data['Vendor'] = $this->config->get('payment_sagepay_direct_vendor');
		$payment_data['VendorTxCode'] = $this->session->data['order_id'] . 'SD' . date('YmdHis') . mt_rand(1, 999);
		$payment_data['Amount'] = $this->currency->format($order_info['total'], $order_info['currency_code'], false, false);
		$payment_data['Currency'] = $this->session->data['currency'];
		$payment_data['Description'] = substr($this->config->get('config_name'), 0, 100);
		$payment_data['TxType'] = $this->config->get('payment_sagepay_direct_transaction');

		$payment_data['CV2'] = $this->request->post['cc_cvv2'];

		$payment_data['CardHolder'] = $this->request->post['cc_owner'];
		$payment_data['CardNumber'] = $this->request->post['cc_number'];
		$payment_data['ExpiryDate'] = $this->request->post['cc_expire_date_month'] . substr($this->request->post['cc_expire_date_year'], 2);
		$payment_data['CardType'] = $this->request->post['cc_type'];
		
		$payment_data['BillingSurname'] = substr($order_info['payment_lastname'], 0, 20);
		$payment_data['BillingFirstnames'] = substr($order_info['payment_firstname'], 0, 20);
		$payment_data['BillingAddress1'] = substr($order_info['payment_address_1'], 0, 100);

		if ($order_info['payment_address_2']) {
			$payment_data['BillingAddress2'] = $order_info['payment_address_2'];
		}

		$payment_data['BillingCity'] = substr($order_info['payment_city'], 0, 40);
		$payment_data['BillingPostCode'] = substr($order_info['payment_postcode'], 0, 10);
		$payment_data['BillingCountry'] = $order_info['payment_iso_code_2'];

		if ($order_info['payment_iso_code_2'] == 'US') {
			$payment_data['BillingState'] = $order_info['payment_zone_code'];
		}

		$payment_data['BillingPhone'] = substr($order_info['telephone'], 0, 20);

		if ($this->cart->hasShipping()) {
			$payment_data['DeliverySurname'] = substr($order_info['shipping_lastname'], 0, 20);
			$payment_data['DeliveryFirstnames'] = substr($order_info['shipping_firstname'], 0, 20);
			$payment_data['DeliveryAddress1'] = substr($order_info['shipping_address_1'], 0, 100);

			if ($order_info['shipping_address_2']) {
				$payment_data['DeliveryAddress2'] = $order_info['shipping_address_2'];
			}

			$payment_data['DeliveryCity'] = substr($order_info['shipping_city'], 0, 40);
			$payment_data['DeliveryPostCode'] = substr($order_info['shipping_postcode'], 0, 10);
			$payment_data['DeliveryCountry'] = $order_info['shipping_iso_code_2'];

			if ($order_info['shipping_iso_code_2'] == 'US') {
				$payment_data['DeliveryState'] = $order_info['shipping_zone_code'];
			}

			$payment_data['CustomerName'] = substr($order_info['firstname'] . ' ' . $order_info['lastname'], 0, 100);
			$payment_data['DeliveryPhone'] = substr($order_info['telephone'], 0, 20);
		} else {
			$payment_data['DeliveryFirstnames'] = $order_info['payment_firstname'];
			$payment_data['DeliverySurname'] = $order_info['payment_lastname'];
			$payment_data['DeliveryAddress1'] = $order_info['payment_address_1'];

			if ($order_info['payment_address_2']) {
				$payment_data['DeliveryAddress2'] = $order_info['payment_address_2'];
			}

			$payment_data['DeliveryCity'] = $order_info['payment_city'];
			$payment_data['DeliveryPostCode'] = $order_info['payment_postcode'];
			$payment_data['DeliveryCountry'] = $order_info['payment_iso_code_2'];

			if ($order_info['payment_iso_code_2'] == 'US') {
				$payment_data['DeliveryState'] = $order_info['payment_zone_code'];
			}

			$payment_data['DeliveryPhone'] = $order_info['telephone'];
		}

		$order_products = $this->model_account_order->getProducts($this->session->data['order_id']);
		
		$cart_rows = 0;
		$str_basket = "";
		
		foreach ($order_products as $product) {
			$str_basket .=
					":" . str_replace(":", " ", $product['name'] . " " . $product['model']) .
					":" . $product['quantity'] .
					":" . $this->currency->format($product['price'], $order_info['currency_code'], false, false) .
					":" . $this->currency->format($product['tax'], $order_info['currency_code'], false, false) .
					":" . $this->currency->format(($product['price'] + $product['tax']), $order_info['currency_code'], false, false) .
					":" . $this->currency->format(($product['price'] + $product['tax']) * $product['quantity'], $order_info['currency_code'], false, false);
			$cart_rows++;
		}

		$order_totals = $this->model_account_order->getTotals($this->session->data['order_id']);
		
		foreach ($order_totals as $total) {
			$str_basket .= ":" . str_replace(":", " ", $total['title']) . ":::::" . $this->currency->format($total['value'], $order_info['currency_code'], false, false);
			$cart_rows++;
		}
		
		$str_basket = $cart_rows . $str_basket;

		$payment_data['Basket'] = $str_basket;

		$payment_data['CustomerEMail'] = substr($order_info['email'], 0, 255);
		$payment_data['ClientIPAddress'] = $this->request->server['REMOTE_ADDR'];
		$payment_data['ChallengeWindowSize'] = '01';
		$payment_data['Apply3DSecure'] = '0';
		$payment_data['ThreeDSNotificationURL'] = str_replace('&amp;', '&', $this->url->link('extension/sagepay/payment/sagepay_direct|threeDSnotify', 'order_id=' . $this->session->data['order_id'] . '&language=' . $this->config->get('config_language')));
		$payment_data['COFUsage'] = 'FIRST';
		$payment_data['InitiatedType'] = 'CIT';

		$browser_languages = explode(',', $this->request->server['HTTP_ACCEPT_LANGUAGE']);
		$browser_language = strtolower(reset($browser_languages));
		
		$payment_data['BrowserAcceptHeader'] = $this->request->server['HTTP_ACCEPT'];
		$payment_data['BrowserColorDepth'] = $this->request->post['BrowserColorDepth'];
		$payment_data['BrowserJavaEnabled'] = '1';
		$payment_data['BrowserJavascriptEnabled'] = '1';
		$payment_data['BrowserLanguage'] = $browser_language;
		$payment_data['BrowserScreenHeight'] = $this->request->post['BrowserScreenHeight'];
		$payment_data['BrowserScreenWidth'] = $this->request->post['BrowserScreenWidth'];
		$payment_data['BrowserTZ'] = $this->request->post['BrowserTZ'];
		$payment_data['BrowserUserAgent'] = $this->request->server['HTTP_USER_AGENT'];
				
		$response_data = $this->model_extension_sagepay_payment_sagepay_direct->sendCurl($url, $payment_data);

		$json = array();

		if ($response_data['Status'] == '3DAUTH') {
			$json['ACSURL'] = $response_data['ACSURL'];
			$json['CReq'] = !empty($response_data['CReq']) ? $response_data['CReq'] : '';
			$json['ACSTransID'] = !empty($response_data['ACSTransID']) ? $response_data['ACSTransID'] : '';
			$json['DSTransID'] = !empty($response_data['DSTransID']) ? $response_data['DSTransID'] : '';
			$json['MD'] = !empty($response_data['MD']) ? $response_data['MD'] : '';
			$json['PaReq'] = !empty($response_data['PAReq']) ? $response_data['PAReq'] : '';

			$response_data['VPSTxId'] = !empty($response_data['VPSTxId']) ? $response_data['VPSTxId'] : '';
			$response_data['SecurityKey'] = !empty($response_data['SecurityKey']) ? $response_data['SecurityKey'] : '';
			$response_data['TxAuthNo'] = !empty($response_data['TxAuthNo']) ? $response_data['TxAuthNo'] : '';

			$this->model_extension_sagepay_payment_sagepay_direct->addOrder($this->session->data['order_id'], $response_data, $payment_data);
			
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Response data', $response_data);
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Payment data', $payment_data);
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Order Id', $this->session->data['order_id']);

			$json['TermUrl'] = str_replace('&amp;', '&', $this->url->link('extension/sagepay/payment/sagepay_direct|callback', 'order_id=' . $this->session->data['order_id'] . '&language=' . $this->config->get('config_language'), true));
		} elseif ($response_data['Status'] == 'OK' || $response_data['Status'] == 'AUTHENTICATED' || $response_data['Status'] == 'REGISTERED') {
			$message = '';

			if (isset($response_data['TxAuthNo'])) {
				$message .= 'TxAuthNo: ' . $response_data['TxAuthNo'] . "\n";
			} else {
				$response_data['TxAuthNo'] = '';
			}

			if (isset($response_data['AVSCV2'])) {
				$message .= 'AVSCV2: ' . $response_data['AVSCV2'] . "\n";
			}

			if (isset($response_data['AddressResult'])) {
				$message .= 'AddressResult: ' . $response_data['AddressResult'] . "\n";
			}

			if (isset($response_data['PostCodeResult'])) {
				$message .= 'PostCodeResult: ' . $response_data['PostCodeResult'] . "\n";
			}

			if (isset($response_data['CV2Result'])) {
				$message .= 'CV2Result: ' . $response_data['CV2Result'] . "\n";
			}

			if (isset($response_data['3DSecureStatus'])) {
				$message .= '3DSecureStatus: ' . $response_data['3DSecureStatus'] . "\n";
			}

			if (isset($response_data['CAVV'])) {
				$message .= 'CAVV: ' . $response_data['CAVV'] . "\n";
			}

			$sagepay_direct_order_id = $this->model_extension_sagepay_payment_sagepay_direct->addOrder($order_info['order_id'], $response_data, $payment_data);
			
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Response data', $response_data);
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Payment data', $payment_data);
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Order Id', $this->session->data['order_id']);

			$this->model_extension_sagepay_payment_sagepay_direct->addTransaction($sagepay_direct_order_id, $this->config->get('payment_sagepay_direct_transaction'), $order_info);

			$this->model_checkout_order->addHistory($this->session->data['order_id'], $this->config->get('payment_sagepay_direct_order_status_id'), $message, false);

			if ($this->config->get('payment_sagepay_direct_transaction') == 'PAYMENT') {
				$subscriptions = $this->cart->getSubscription();
				//loop through any products that are subscription items
				foreach ($subscriptions as $item) {
					$this->model_extension_sagepay_payment_sagepay_direct->subscriptionPayment($item, $payment_data['VendorTxCode']);
				}
			}

			$json['redirect'] = $this->url->link('checkout/success', 'language=' . $this->config->get('config_language'));
		} else {
			$json['error'] = $response_data['Status'] . ': ' . $response_data['StatusDetail'];
			
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Response data', $json['error']);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
		
	public function callback(): void {	
		$this->load->language('extension/sagepay/payment/sagepay_direct');
		
		$this->load->model('extension/sagepay/payment/sagepay_direct');
		$this->load->model('checkout/order');
		
		if (isset($this->request->post) && isset($this->request->get['order_id'])) {
			if ($this->config->get('payment_sagepay_direct_test') == 'live') {
				$url = 'https://live.sagepay.com/gateway/service/direct3dcallback.vsp';
			} elseif ($this->config->get('payment_sagepay_direct_test') == 'test') {
				$url = 'https://test.sagepay.com/gateway/service/direct3dcallback.vsp';
			}
						
			$response_data = $this->model_extension_sagepay_payment_sagepay_direct->sendCurl($url, $this->request->post);
			
			$this->model_extension_sagepay_payment_sagepay_direct->logger('Response Data', $response_data);

			if ($response_data['Status'] == 'OK' || $response_data['Status'] == 'AUTHENTICATED' || $response_data['Status'] == 'REGISTERED') {
				$message = '';

				if (isset($response_data['TxAuthNo'])) {
					$message .= 'TxAuthNo: ' . $response_data['TxAuthNo'] . "\n";
				} else {
					$response_data['TxAuthNo'] = '';
				}

				if (isset($response_data['AVSCV2'])) {
					$message .= 'AVSCV2: ' . $response_data['AVSCV2'] . "\n";
				}

				if (isset($response_data['AddressResult'])) {
					$message .= 'AddressResult: ' . $response_data['AddressResult'] . "\n";
				}

				if (isset($response_data['PostCodeResult'])) {
					$message .= 'PostCodeResult: ' . $response_data['PostCodeResult'] . "\n";
				}

				if (isset($response_data['CV2Result'])) {
					$message .= 'CV2Result: ' . $response_data['CV2Result'] . "\n";
				}

				if (isset($response_data['3DSecureStatus'])) {
					$message .= '3DSecureStatus: ' . $response_data['3DSecureStatus'] . "\n";
				}

				if (isset($response_data['CAVV'])) {
					$message .= 'CAVV: ' . $response_data['CAVV'] . "\n";
				}

				$order_info = $this->model_checkout_order->getOrder($this->request->get['order_id']);
				$sagepay_order_info = $this->model_extension_sagepay_payment_sagepay_direct->getOrder($this->request->get['order_id']);

				$this->model_extension_sagepay_payment_sagepay_direct->logger('Order Info', $order_info);
				$this->model_extension_sagepay_payment_sagepay_direct->logger('Sagepay Order Info', $sagepay_order_info);

				$this->model_extension_sagepay_payment_sagepay_direct->updateOrder($order_info, $response_data);
				$this->model_extension_sagepay_payment_sagepay_direct->addTransaction($sagepay_order_info['sagepay_direct_order_id'], $this->config->get('payment_sagepay_direct_transaction'), $order_info);
				$this->model_checkout_order->addHistory($this->request->get['order_id'], $this->config->get('payment_sagepay_direct_order_status_id'), $message, false);

				if ($this->config->get('payment_sagepay_direct_transaction') == 'PAYMENT') {
					$subscriptions = $this->cart->getSubscription();
					//loop through any products that are subscription items
					foreach ($subscriptions as $item) {
						$this->model_extension_sagepay_payment_sagepay_direct->subscriptionPayment($item, $payment_data['VendorTxCode']);
					}
				}

				$this->response->redirect($this->url->link('checkout/success', 'language=' . $this->config->get('config_language')));
			} else {
				$this->session->data['error'] = $response_data['StatusDetail'];

				$this->response->redirect($this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language')));
			}
		} else {
			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language')));
		}
	}
	
	public function threeDSnotify(): void {		
		$this->load->language('extension/sagepay/payment/sagepay_direct');
		
		$this->load->model('extension/sagepay/payment/sagepay_direct');
		$this->load->model('checkout/order');
		
		if (isset($this->request->post)) {
			if (isset($this->request->get['order_id'])) {
				$sagepay_order_info = $this->model_extension_sagepay_payment_sagepay_direct->getOrder($this->request->get['order_id']);
				
				if ($this->config->get('payment_sagepay_direct_test') == 'live') {
					$url = 'https://live.sagepay.com/gateway/service/direct3dcallback.vsp';
				} elseif ($this->config->get('payment_sagepay_direct_test') == 'test') {
					$url = 'https://test.sagepay.com/gateway/service/direct3dcallback.vsp';
				}
				
				$this->request->post['VPSTxId'] = $sagepay_order_info['VPSTxId'];
								
				$response_data = $this->model_extension_sagepay_payment_sagepay_direct->sendCurl($url, $this->request->post);
							
				$this->model_extension_sagepay_payment_sagepay_direct->logger('Response Data', $response_data);
				
				if ($response_data['Status'] == 'OK' || $response_data['Status'] == 'AUTHENTICATED' || $response_data['Status'] == 'REGISTERED') {
					$message = '';

					if (isset($response_data['TxAuthNo'])) {
						$message .= 'TxAuthNo: ' . $response_data['TxAuthNo'] . "\n";
					} else {
						$response_data['TxAuthNo'] = '';
					}

					if (isset($response_data['AVSCV2'])) {
						$message .= 'AVSCV2: ' . $response_data['AVSCV2'] . "\n";
					}

					if (isset($response_data['AddressResult'])) {
						$message .= 'AddressResult: ' . $response_data['AddressResult'] . "\n";
					}

					if (isset($response_data['PostCodeResult'])) {
						$message .= 'PostCodeResult: ' . $response_data['PostCodeResult'] . "\n";
					}

					if (isset($response_data['CV2Result'])) {
						$message .= 'CV2Result: ' . $response_data['CV2Result'] . "\n";
					}

					if (isset($response_data['3DSecureStatus'])) {
						$message .= '3DSecureStatus: ' . $response_data['3DSecureStatus'] . "\n";
					}

					if (isset($response_data['CAVV'])) {
						$message .= 'CAVV: ' . $response_data['CAVV'] . "\n";
					}

					$order_info = $this->model_checkout_order->getOrder($this->request->get['order_id']);
					
					$this->model_extension_sagepay_payment_sagepay_direct->logger('Order Info', $order_info);
					$this->model_extension_sagepay_payment_sagepay_direct->logger('Sagepay Order Info', $sagepay_order_info);

					$this->model_extension_sagepay_payment_sagepay_direct->updateOrder($order_info, $response_data);
					$this->model_extension_sagepay_payment_sagepay_direct->addTransaction($sagepay_order_info['sagepay_direct_order_id'], $this->config->get('payment_sagepay_direct_transaction'), $order_info);
					$this->model_checkout_order->addHistory($this->request->get['order_id'], $this->config->get('payment_sagepay_direct_order_status_id'), $message, false);

					if ($this->config->get('payment_sagepay_direct_transaction') == 'PAYMENT') {
						$subscriptions = $this->cart->getSubscription();
						//loop through any products that are subscription items
						foreach ($subscriptions as $item) {
							$this->model_extension_sagepay_payment_sagepay_direct->subscriptionPayment($item, $payment_data['VendorTxCode']);
						}
					}

					$this->response->redirect($this->url->link('checkout/success', 'language=' . $this->config->get('config_language')));
				} else {
					$this->session->data['error'] = $response_data['StatusDetail'];

					$this->response->redirect($this->url->link('checkout/checkout', 'language=' . $this->config->get('config_language')));
				}
			} else {
				$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language')));
			}
		}
	}

	public function cron(): void {
		if (isset($this->request->get['token']) && hash_equals($this->config->get('payment_sagepay_direct_cron_job_token'), $this->request->get['token'])) {
			$this->load->model('extension/sagepay/payment/sagepay_direct');

			$orders = $this->model_extension_sagepay_payment_sagepay_direct->cronPayment();

			$this->model_extension_sagepay_payment_sagepay_direct->updateCronJobRunTime();

			$this->model_extension_sagepay_payment_sagepay_direct->logger('Repeat Orders', $orders);
		}
	}
}