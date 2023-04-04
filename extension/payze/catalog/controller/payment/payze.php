<?php
namespace Opencart\Catalog\Controller\Extension\Payze\Payment;
class Payze extends \Opencart\System\Engine\Controller {
	private $error = [];
	
	public function index(): string {
		if ($this->config->get('payment_payze_api_key') && $this->config->get('payment_payze_api_secret') && !$this->failurePage() && !$this->webhook()) {
			$this->load->language('extension/payze/payment/payze');	

			$data['logged'] = $this->customer->isLogged();

			$data['customer_cards'] = [];			
			
			if ($data['logged']) {
				$this->load->model('extension/payze/payment/payze');
				
				$data['customer_cards'] = $this->model_extension_payze_payment_payze->getCustomerCards($this->customer->getId());
			}
			
			$data['language'] = $this->config->get('config_language');			
			
			return $this->load->view('extension/payze/payment/payze', $data);
		}
		
		return '';
	}
	
	public function confirm(): void {				
		$this->load->language('extension/payze/payment/payze');
		
		$this->load->model('extension/payze/payment/payze');
		$this->load->model('checkout/order');
				
		// Setting
		$_config = new \Opencart\System\Engine\Config();
		$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
		$_config->load('payze');
			
		$config_setting = $_config->get('payze_setting');
		
		$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_payze_setting'));
						
		$api_key = $this->config->get('payment_payze_api_key');
		$api_secret = $this->config->get('payment_payze_api_secret');
		$preauthorize = (bool)$setting['general']['preauthorize'];
			
		$currency_code = $this->session->data['currency'];
		$currency_value = $this->currency->getValue($this->session->data['currency']);
		$decimal_place = $this->currency->getDecimalPlace($this->session->data['currency']);
										
		$order_id = $this->session->data['order_id'];
		
		$order_info = $this->model_checkout_order->getOrder($order_id);
			
		$order_total = number_format($order_info['total'] * $currency_value, $decimal_place, '.', '');

		require_once DIR_EXTENSION . 'payze/system/library/payze.php';
					
		$payze = new \Opencart\System\Library\Payze($api_key, $api_secret);
						
		$payze_data = [
			'amount' => $order_total,
			'currency' => $currency_code,
			'callback' => str_replace('&amp;', '&', $this->url->link('checkout/success', 'language=' . $this->config->get('config_language'))),
			'callbackError' => str_replace('&amp;', '&', $this->url->link('extension/payze/payment/payze', 'failure_page=true&language=' . $this->config->get('config_language'))),
			'preauthorize' => $preauthorize,
			'lang' => 'EN',
			'channel' => 'opencart',
			'hookUrl' => str_replace('&amp;', '&', $this->url->link('extension/payze/payment/payze', 'authorization_token=' . $order_info['order_id'] . '_' . date('Ymd_His'))),
			'hookRefund' => true
		];
		
		if (!empty($this->request->post['payze_card_existing']) && !empty($this->request->post['payze_card'])) {
			$payze_data['cardToken'] = $this->request->post['payze_card'];
			
			$result = $payze->payWithCard($payze_data);
		} elseif (!empty($this->request->post['payze_card_save'])) {
			$result = $payze->addCard($payze_data);
		} else {
			$result = $payze->justPay($payze_data);
		}
		
		if (!empty($result['response']['transactionUrl'])) {
			$data['redirect'] = $result['response']['transactionUrl'];
		} elseif (!empty($result['response']['transactionId'])) {
			$data['redirect'] = str_replace('&amp;', '&', $this->url->link('checkout/success', 'language=' . $this->config->get('config_language')));
		}
					
		if ($payze->hasErrors()) {
			$errors = $payze->getErrors();
											
			foreach ($errors as $error) {
				$this->model_extension_payze_payment_payze->log($error, 'Error');
			}
				
			$this->error['warning'] = implode('. ', $errors);
		}
			
		if (!empty($this->error['warning'])) {
			$this->error['warning'] .= '. ' . sprintf($this->language->get('error_payment'), $this->url->link('information/contact', 'language=' . $this->config->get('config_language')));
		}	
					
		$data['language'] = $this->config->get('config_language');
							
		$data['error'] = $this->error;
				
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data));
	}
	
	public function failurePage(): bool {
		if (!empty($this->request->get['failure_page'])) {
			$this->load->language('extension/payze/payment/payze');

			$this->document->setTitle($this->language->get('text_failure_page_title'));
		
			$data['breadcrumbs'] = [];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_home'),
				'href' => $this->url->link('common/home', 'language=' . $this->config->get('config_language'))
			];
		
			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_cart'),
				'href' => $this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'))
			];

			$data['breadcrumbs'][] = [
				'text' => $this->language->get('text_title'),
				'href' => $this->url->link('extension/payze/payment/payze|failurePage', 'language=' . $this->config->get('config_language'))
			];
				
			$data['text_title'] = $this->language->get('text_failure_page_title');
			$data['text_message'] = sprintf($this->language->get('text_failure_page_message'), $this->url->link('information/contact', 'language=' . $this->config->get('config_language')));
		
			$data['continue'] = $this->url->link('common/home');
		
			$data['language'] = $this->config->get('config_language');
				
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');
	
			$this->response->setOutput($this->load->view('extension/payze/payment/failure_page', $data));
			
			return true;
		}
		
		return false;
	}
			
	public function webhook(): bool {
		$this->load->language('extension/payze/payment/payze');
		
		$this->load->model('extension/payze/payment/payze');
								
		$webhook_info = json_decode(html_entity_decode(file_get_contents('php://input')), true);
		
		if (!empty($webhook_info['transactionId']) && !empty($webhook_info['status']) && !empty($this->request->get['authorization_token'])) {
			$this->model_extension_payze_payment_payze->log($webhook_info, 'Webhook');
							
			// Setting
			$_config = new \Opencart\System\Engine\Config();
			$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
			$_config->load('payze');
			
			$config_setting = $_config->get('payze_setting');
		
			$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_payze_setting'));
					
			$api_key = $this->config->get('payment_payze_api_key');
			$api_secret = $this->config->get('payment_payze_api_secret');
											
			require_once DIR_EXTENSION . 'payze/system/library/payze.php';
				
			$payze = new \Opencart\System\Library\Payze($api_key, $api_secret);
			
			$payze_data = [
				'transactionId' => $webhook_info['transactionId']
			];
			
			$result = $payze->getTransactionInfo($payze_data);
			
			if (!empty($result['response']['transactionId']) && !empty($result['response']['status'])) {
				$authorization_token = explode('_', $this->request->get['authorization_token']);
				$order_id = reset($authorization_token);
				
				$order_status_id = 0;
				$comment = '';
					
				if ($result['response']['status'] == 'Blocked') {
					$order_status_id = $setting['order_status']['blocked']['id'];
				}
				
				if ($result['response']['status'] == 'CardAdded') {
					$order_status_id = $setting['order_status']['card_added']['id'];
				}
				
				if ($result['response']['status'] == 'Committed') {
					$order_status_id = $setting['order_status']['committed']['id'];
				}
				
				if ($result['response']['status'] == 'Created') {
					$order_status_id = $setting['order_status']['created']['id'];
				}
				
				if ($result['response']['status'] == 'Refunded') {
					$order_status_id = $setting['order_status']['refunded']['id'];
				}
				
				if ($result['response']['status'] == 'RefundedPartially') {
					$order_status_id = $setting['order_status']['refunded_partially']['id'];
				}
				
				if ($result['response']['status'] == 'Rejected') {
					$order_status_id = $setting['order_status']['rejected']['id'];
				}
				
				if ($result['response']['status'] == 'Timeout') {
					$order_status_id = $setting['order_status']['timeout']['id'];
				}
				
				if ($order_status_id) {
					$this->load->model('checkout/order');
					
					$payze_order_info = $this->model_extension_payze_payment_payze->getOrder($order_id);
					
					if (!$payze_order_info) {
						$payze_data = [
							'order_id' => $order_id,
							'transaction_id' => $result['response']['transactionId']
						];
					
						$this->model_extension_payze_payment_payze->addOrder($payze_data);
					}
					
					if ($result['response']['status'] == 'CardAdded') {				
						$order_info = $this->model_checkout_order->getOrder($order_id);
		
						if ($order_info) {
							$payze_data = [
								'customer_id' => $order_info['customer_id'],
								'card_id' => $result['response']['transactionId'],
								'card_brand' => $result['response']['cardBrand'],
								'card_mask' => $result['response']['cardMask'],
								'expiration_date' => $result['response']['expirationDate']
							];
					
							$this->model_extension_payze_payment_payze->addCustomerCard($payze_data);
						}
					}
					
					if ($result['response']['status'] == 'RefundedPartially') {
						$order_info = $this->model_checkout_order->getOrder($order_id);
		
						if ($order_info) {
							if (isset($result['response']['amountRefunded'])) {
								$comment = sprintf($this->language->get('text_refunded_partially'), $this->currency->format($result['response']['amountRefunded'], $order_info['currency_code'], $order_info['currency_value']));
							}
					
							if (isset($result['response']['finalAmount'])) {
								$this->model_extension_payze_payment_payze->setOrderTotal($order_id, $result['response']['finalAmount']);
							}
						}
					}

					$this->model_checkout_order->addHistory($order_id, $order_status_id, $comment, true);
				}
			}
						
			if ($payze->hasErrors()) {
				$errors = $payze->getErrors();
				
				foreach ($errors as $error) {
					$this->model_extension_payze_payment_payze->log($error, 'Error');
				}
			}
	
			return true;
		}
		
		return false;
	}
		
	public function order_add_history_before(string &$route, array &$data): void {
		$this->load->model('extension/payze/payment/payze');
		$this->load->model('checkout/order');
		
		$webhook_info = json_decode(html_entity_decode(file_get_contents('php://input')), true);
		
		if (empty($webhook_info['transactionId']) && empty($webhook_info['status']) && empty($this->request->get['authorization_token'])) {
			if (isset($data[0])) {
				$order_id = $data[0];
			} else {
				$order_id = 0;
			}

			if (isset($data[1])) {
				$order_status_id = $data[1];
			} else {
				$order_status_id = 0;
			}
				
			// We need to grab the old order status ID		
			$order_info = $this->model_checkout_order->getOrder($order_id);
		
			if ($order_info) {
				// Setting
				$_config = new \Opencart\System\Engine\Config();
				$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
				$_config->load('payze');
			
				$config_setting = $_config->get('payze_setting');
		
				$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_payze_setting'));
			
				if (($order_info['payment_code'] == 'payze') && ($order_info['order_status_id'] != $order_status_id) && (($order_status_id == $setting['order_status']['committed']['id']) || ($order_status_id == $setting['order_status']['refunded']['id']) || ($order_status_id == $setting['order_status']['refunded_partially']['id']))) {									
					$payze_order_info = $this->model_extension_payze_payment_payze->getOrder($order_id);
					
					if ($payze_order_info) {					
						$api_key = $this->config->get('payment_payze_api_key');
						$api_secret = $this->config->get('payment_payze_api_secret');
						
						$currency_code = $order_info['currency_code'];
						$currency_value = $order_info['currency_value'];
						$decimal_place = $this->currency->getDecimalPlace($currency_code);
													
						$order_total = number_format($order_info['total'] * $currency_value, $decimal_place, '.', '');
											
						require_once DIR_EXTENSION . 'payze/system/library/payze.php';
				
						$payze = new \Opencart\System\Library\Payze($api_key, $api_secret);
						
						$payze_data = [
							'transactionId' => $payze_order_info['transaction_id'],
							'amount' => $order_total,
						];
								
						if ($order_status_id == $setting['order_status']['committed']['id']) {
							$result = $payze->commit($payze_data);
						}
						
						if (($order_status_id == $setting['order_status']['refunded']['id']) || ($order_status_id == $setting['order_status']['refunded_partially']['id'])) {
							$result = $payze->refund($payze_data);
						}
						
						if ($payze->hasErrors()) {
							$errors = $payze->getErrors();
				
							foreach ($errors as $error) {
								$this->model_extension_payze_payment_payze->log($error, 'Error');
							}
						}
					}
				}
			}
		}
	}
	
	public function order_delete_order_before(string &$route, array &$data): void {
		$this->load->model('extension/payze/payment/payze');

		$order_id = $data[0];

		$this->model_extension_payze_payment_payze->deleteOrder($order_id);
	}
}