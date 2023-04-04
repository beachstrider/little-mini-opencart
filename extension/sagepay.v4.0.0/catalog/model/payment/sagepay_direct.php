<?php
namespace Opencart\Catalog\Model\Extension\Sagepay\Payment;
class SagepayDirect extends \Opencart\System\Engine\Model {
	public function getMethod(array $address): array {
		$this->load->language('extension/sagepay/payment/sagepay_direct');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('payment_sagepay_direct_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if ($this->cart->hasSubscription()) {
			$status = false;
		} elseif (!$this->config->get('payment_sagepay_direct_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = [];

		if ($status) {
			$method_data = [
				'code'       => 'sagepay_direct',
				'title'      => $this->language->get('text_title'),
				'sort_order' => $this->config->get('payment_sagepay_direct_sort_order')
			];
		}

		return $method_data;
	}
	
	public function addOrder(int $order_id, array $response_data, array $payment_data): int {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "sagepay_direct_order` SET `order_id` = '" . (int)$order_id . "', `VPSTxId` = '" . $this->db->escape($response_data['VPSTxId']) . "', `VendorTxCode` = '" . $this->db->escape($payment_data['VendorTxCode']) . "', `SecurityKey` = '" . $this->db->escape($response_data['SecurityKey']) . "', `TxAuthNo` = '" . $this->db->escape($response_data['TxAuthNo']) . "', `date_added` = now(), `date_modified` = now(), `currency_code` = '" . $this->db->escape($payment_data['Currency']) . "', `total` = '" . $this->currency->format($payment_data['Amount'], $payment_data['Currency'], false, false) . "'");

		return $this->db->getLastId();
	}

	public function getOrder(int $order_id): array|bool {
		$qry = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sagepay_direct_order` WHERE `order_id` = '" . (int)$order_id . "' LIMIT 1");

		if ($qry->num_rows) {
			$order = $qry->row;
			$order['transactions'] = $this->getTransactions($order['sagepay_direct_order_id']);

			return $order;
		} else {
			return false;
		}
	}

	public function updateOrder(array $order_info, array $data): int {
		$this->db->query("UPDATE `" . DB_PREFIX . "sagepay_direct_order` SET `SecurityKey` = '" . $this->db->escape($data['SecurityKey']) . "',  `VPSTxId` = '" . $this->db->escape($data['VPSTxId']) . "', `TxAuthNo` = '" . $this->db->escape($data['TxAuthNo']) . "' WHERE `order_id` = '" . (int)$order_info['order_id'] . "'");

		return $this->db->getLastId();
	}

	public function deleteOrder(int $vendor_tx_code): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "sagepay_direct_order` WHERE order_id = '" . $vendor_tx_code . "'");
	}

	public function addTransaction(int $sagepay_direct_order_id, string $type, array $order_info): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "sagepay_direct_order_transaction` SET `sagepay_direct_order_id` = '" . (int)$sagepay_direct_order_id . "', `date_added` = now(), `type` = '" . $this->db->escape($type) . "', `amount` = '" . $this->currency->format($order_info['total'], $order_info['currency_code'], false, false) . "'");
	}

	private function getTransactions(int $sagepay_direct_order_id): array|bool {
		$qry = $this->db->query("SELECT * FROM `" . DB_PREFIX . "sagepay_direct_order_transaction` WHERE `sagepay_direct_order_id` = '" . (int)$sagepay_direct_order_id . "'");

		if ($qry->num_rows) {
			return $qry->rows;
		} else {
			return false;
		}
	}

	public function subscriptionPayment(array $item, string $vendor_tx_code): void {
		$this->load->model('checkout/subscription');
				
		//trial information
		if ($item['subscription']['trial'] == 1) {
			$price = $item['subscription']['trial_price'];
			$trial_amt = $this->currency->format($this->tax->calculate($item['subscription']['trial_price'], $item['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'], false, false) * $item['quantity'] . ' ' . $this->session->data['currency'];
			$trial_text = sprintf($this->language->get('text_trial'), $trial_amt, $item['subscription']['trial_cycle'], $item['subscription']['trial_frequency'], $item['subscription']['trial_duration']);
		} else {
			$price = $item['subscription']['price'];
			$trial_text = '';
		}

		$subscription_amt = $this->currency->format($this->tax->calculate($item['subscription']['price'], $item['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'], false, false) * $item['quantity'] . ' ' . $this->session->data['currency'];
		$subscription_description = $trial_text . sprintf($this->language->get('text_subscription'), $subscription_amt, $item['subscription']['cycle'], $item['subscription']['frequency']);

		if ($item['subscription']['duration'] > 0) {
			$subscription_description .= sprintf($this->language->get('text_length'), $item['subscription']['duration']);
		}
		
		$item['subscription']['description'] = $subscription_description;

		//create new subscription and set to pending status as no payment has been made yet.
		$subscription_id = $this->model_checkout_subscription->addSubscription($this->session->data['order_id'], $item['subscription']);
		
		$this->model_checkout_subscription->editReference($subscription_id, $vendor_tx_code);

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		$sagepay_order_info = $this->getOrder($this->session->data['order_id']);

		$response_data = $this->setPaymentData($order_info, $sagepay_order_info, $price, $subscription_id, $item['subscription']['name']);

		$next_payment = new DateTime('now');
		$trial_end = new DateTime('now');
		$subscription_end = new DateTime('now');

		if ($item['subscription']['trial'] == 1 && $item['subscription']['trial_duration'] != 0) {
			$next_payment = $this->calculateSchedule($item['subscription']['trial_frequency'], $next_payment, $item['subscription']['trial_cycle']);
			$trial_end = $this->calculateSchedule($item['subscription']['trial_frequency'], $trial_end, $item['subscription']['trial_cycle'] * $item['subscription']['trial_duration']);
		} elseif ($item['subscription']['trial'] == 1) {
			$next_payment = $this->calculateSchedule($item['subscription']['trial_frequency'], $next_payment, $item['subscription']['trial_cycle']);
			$trial_end = new DateTime('0000-00-00');
		}

		if ($trial_end > $subscription_end && $item['subscription']['duration'] != 0) {
			$subscription_end = new DateTime(date_format($trial_end, 'Y-m-d H:i:s'));
			$subscription_end = $this->calculateSchedule($item['subscription']['frequency'], $subscription_end, $item['subscription']['cycle'] * $item['subscription']['duration']);
		} elseif ($trial_end == $subscription_end && $item['subscription']['duration'] != 0) {
			$next_payment = $this->calculateSchedule($item['subscription']['frequency'], $next_payment, $item['subscription']['cycle']);
			$subscription_end = $this->calculateSchedule($item['subscription']['frequency'], $subscription_end, $item['subscription']['cycle'] * $item['subscription']['duration']);
		} elseif ($trial_end > $subscription_end && $item['subscription']['duration'] == 0) {
			$subscription_end = new DateTime('0000-00-00');
		} elseif ($trial_end == $subscription_end && $item['subscription']['duration'] == 0) {
			$next_payment = $this->calculateSchedule($item['subscription']['frequency'], $next_payment, $item['subscription']['cycle']);
			$subscription_end = new DateTime('0000-00-00');
		}

		$this->addSubscriptionOrder($this->session->data['order_id'], $response_data, $subscription_id, date_format($trial_end, 'Y-m-d H:i:s'), date_format($subscription_end, 'Y-m-d H:i:s'));

		if ($response_data['Status'] == 'OK') {
			$this->updateSubscriptionOrder($subscription_id, date_format($next_payment, 'Y-m-d H:i:s'));

			$this->addSubscriptionTransaction($subscription_id, $this->session->data['order_id'], $response_data, 1);
		} else {
			$this->addSubscriptionTransaction($subscription_id, $this->session->data['order_id'], $response_data, 4);
		}
	}

	private function setPaymentData(array $order_info, array $sagepay_order_info, float $price, int $subscription_id, string $subscription_name, $i = null): array {
		if ($this->config->get('payment_sagepay_direct_test') == 'live') {
			$url = 'https://live.sagepay.com/gateway/service/repeat.vsp';
			$payment_data['VPSProtocol'] = '4.00';
		} elseif ($this->config->get('payment_sagepay_direct_test') == 'test') {
			$url = 'https://test.sagepay.com/gateway/service/repeat.vsp';
			$payment_data['VPSProtocol'] = '4.00';
		}

		$payment_data['TxType'] = 'REPEAT';
		$payment_data['Vendor'] = $this->config->get('payment_sagepay_direct_vendor');
		$payment_data['VendorTxCode'] = $subscription_id . 'RSD' . strftime("%Y%m%d%H%M%S") . mt_rand(1, 999);
		$payment_data['Amount'] = $this->currency->format($price, $this->session->data['currency'], false, false);
		$payment_data['Currency'] = $this->session->data['currency'];
		$payment_data['Description'] = substr($subscription_name, 0, 100);
		$payment_data['RelatedVPSTxId'] = trim($sagepay_order_info['VPSTxId'], '{}');
		$payment_data['RelatedVendorTxCode'] = $sagepay_order_info['VendorTxCode'];
		$payment_data['RelatedSecurityKey'] = $sagepay_order_info['SecurityKey'];
		$payment_data['RelatedTxAuthNo'] = $sagepay_order_info['TxAuthNo'];

		if (!empty($order_info['shipping_lastname'])) {
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
		
		$response_data = $this->sendCurl($url, $payment_data, $i);
		
		$response_data['VendorTxCode'] = $payment_data['VendorTxCode'];
		$response_data['Amount'] = $payment_data['Amount'];
		$response_data['Currency'] = $payment_data['Currency'];

		return $response_data;
	}

	public function cronPayment(): array {
		$this->load->model('account/order');
		
		$subscriptions = $this->getProfiles();
		$cron_data = array();
		$i = 0;

		foreach ($subscriptions as $subscription) {
			$subscription_order = $this->getSubscriptionOrder($subscription['subscription_id']);

			$today = new DateTime('now');
			$unlimited = new DateTime('0000-00-00');
			$next_payment = new DateTime($subscription_order['next_payment']);
			$trial_end = new DateTime($subscription_order['trial_end']);
			$subscription_end = new DateTime($subscription_order['subscription_end']);

			$order_info = $this->model_account_order->getOrder($subscription['order_id']);

			if (($today > $next_payment) && ($trial_end > $today || $trial_end == $unlimited)) {
				$price = $this->currency->format($subscription['trial_price'], $order_info['currency_code'], false, false);
				$frequency = $subscription['trial_frequency'];
				$cycle = $subscription['trial_cycle'];
			} elseif (($today > $next_payment) && ($subscription_end > $today || $subscription_end == $unlimited)) {
				$price = $this->currency->format($subscription['subscription_price'], $order_info['currency_code'], false, false);
				$frequency = $subscription['subscription_frequency'];
				$cycle = $subscription['subscription_cycle'];
			} else {
				continue;
			}

			$sagepay_order_info = $this->getOrder($subscription['order_id']);

			$response_data = $this->setPaymentData($order_info, $sagepay_order_info, $price, $subscription['subscription_id'], $subscription['subscription_name'], $i);

			$cron_data[] = $response_data;

			if ($response_data['RepeatResponseData_' . $i++]['Status'] == 'OK') {
				$this->addSubscriptionTransaction($subscription['subscription_id'], $subscription['order_id'], $response_data, 1);
				$next_payment = $this->calculateSchedule($frequency, $next_payment, $cycle);
				$next_payment = date_format($next_payment, 'Y-m-d H:i:s');
				$this->updateSubscriptionOrder($subscription['subscription_id'], $next_payment);
			} else {
				$this->addSubscriptionTransaction($subscription['subscription_id'], $subscription['order_id'], $response_data, 4);
			}
		}
		
		$log = new \Opencart\System\Library\Log('sagepay_direct_subscription_orders.log');
		$log->write(print_r($cron_data, 1));
		
		return $cron_data;
	}

	private function calculateSchedule(string $frequency, string $next_payment, string $cycle) {
		if ($frequency == 'semi_month') {
			$day = date_format($next_payment, 'd');
			$value = 15 - $day;
			$is_even = false;
			
			if ($cycle % 2 == 0) {
				$is_even = true;
			}

			$odd = ($cycle + 1) / 2;
			$plus_even = ($cycle / 2) + 1;
			$minus_even = $cycle / 2;

			if ($day == 1) {
				$odd = $odd - 1;
				$plus_even = $plus_even - 1;
				$day = 16;
			}

			if ($day <= 15 && $is_even) {
				$next_payment->modify('+' . $value . ' day');
				$next_payment->modify('+' . $minus_even . ' month');
			} elseif ($day <= 15) {
				$next_payment->modify('first day of this month');
				$next_payment->modify('+' . $odd . ' month');
			} elseif ($day > 15 && $is_even) {
				$next_payment->modify('first day of this month');
				$next_payment->modify('+' . $plus_even . ' month');
			} elseif ($day > 15) {
				$next_payment->modify('+' . $value . ' day');
				$next_payment->modify('+' . $odd . ' month');
			}
		} else {
			$next_payment->modify('+' . $cycle . ' ' . $frequency);
		}
		
		return $next_payment;
	}

	private function addSubscriptionOrder(int $order_id, array $response_data, int $subscription_id, string $trial_end, string $subscription_end): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "sagepay_direct_order_subscription` SET `order_id` = '" . (int)$order_id . "', `subscription_id` = '" . (int)$subscription_id . "', `VPSTxId` = '" . $this->db->escape($response_data['VPSTxId']) . "', `VendorTxCode` = '" . $this->db->escape($response_data['VendorTxCode']) . "', `SecurityKey` = '" . $this->db->escape($response_data['SecurityKey']) . "', `TxAuthNo` = '" . $this->db->escape($response_data['TxAuthNo']) . "', `date_added` = now(), `date_modified` = now(), `next_payment` = now(), `trial_end` = '" . $trial_end . "', `subscription_end` = '" . $subscription_end . "', `currency_code` = '" . $this->db->escape($response_data['Currency']) . "', `total` = '" . $this->currency->format($response_data['Amount'], $response_data['Currency'], false, false) . "'");
	}

	private function updateSubscriptionOrder(int $subscription_id, string $next_payment): void {
		$this->db->query("UPDATE `" . DB_PREFIX . "sagepay_direct_order_subscription` SET `next_payment` = '" . $next_payment . "', `date_modified` = now() WHERE `subscription_id` = '" . (int)$subscription_id . "'");
	}

	private function getSubscriptionOrder(int $subscription_id): array {
		$qry = $this->db->query("SELECT * FROM " . DB_PREFIX . "sagepay_direct_order_subscription WHERE subscription_id = '" . (int)$subscription_id . "'");
		
		return $qry->row;
	}

	private function addSubscriptionTransaction(int $subscription_id, int $order_id, array $response_data, int $type): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "subscription_transaction` SET `subscription_id` = '" . (int)$subscription_id . "', `order_id` = '" . (int)$order_id . "', `date_added` = NOW(), `amount` = '" . (float)$response_data['Amount'] . "', `type` = '" . (int)$type . "', `reference` = '" . $this->db->escape($response_data['VendorTxCode']) . "'");
	}

	private function getProfiles(): array {
		$sql = "
			SELECT `or`.subscription_id
			FROM `" . DB_PREFIX . "subscription` `or`
			JOIN `" . DB_PREFIX . "order` `o` USING(`order_id`)
			WHERE o.payment_code = 'sagepay_direct'";

		$qry = $this->db->query($sql);

		$subscriptions = array();

		foreach ($qry->rows as $subscription) {
			$subscriptions[] = $this->getProfile($subscription['subscription_id']);
		}
		
		return $subscriptions;
	}

	private function getProfile(int $subscription_id): array {
		$qry = $this->db->query("SELECT * FROM " . DB_PREFIX . "subscription WHERE subscription_id = " . (int)$subscription_id);
		
		return $qry->row;
	}

	public function updateCronJobRunTime(): void {
		$this->db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE `code` = 'sagepay_direct' AND `key` = 'payment_sagepay_direct_last_cron_job_run'");
		$this->db->query("INSERT INTO `" . DB_PREFIX . "setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES (0, 'sagepay_direct', 'payment_sagepay_direct_last_cron_job_run', NOW(), 0)");
	}

	public function sendCurl(string $url, array $payment_data, $i = null): array {
		$curl = curl_init($url);

		curl_setopt($curl, CURLOPT_PORT, 443);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, false);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, 1);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, 1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($payment_data));

		$response = curl_exec($curl);

		curl_close($curl);
		
		$data = array();

		$response_info = explode(chr(10), $response);

		foreach ($response_info as $string) {
			if (strpos($string, '=') && isset($i)) {
				$parts = explode('=', $string, 2);
				$data['RepeatResponseData_' . $i][trim($parts[0])] = trim($parts[1]);
			} elseif (strpos($string, '=')) {
				$parts = explode('=', $string, 2);
				$data[trim($parts[0])] = trim($parts[1]);
			}
		}
		
		return $data;
	}

	public function logger(string $title, array|string $data): void {
		if ($this->config->get('payment_sagepay_direct_debug')) {
			$log = new \Opencart\System\Library\Log('sagepay_direct.log');
			$log->write($title . ': ' . print_r($data, 1));
		}
	}

	public function subscriptionPayments(): bool {
		/*
		 * Used by the checkout to state the module
		 * supports subscription subscriptions.
		 */
		return true;
	}
}