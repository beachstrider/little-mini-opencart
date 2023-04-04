<?php
namespace Opencart\Catalog\Model\Extension\Payze\Payment;
class Payze extends \Opencart\System\Engine\Model { 

	public function getMethod(array $address): array {
		$this->load->language('extension/payze/payment/payze');

		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "zone_to_geo_zone` WHERE `geo_zone_id` = '" . (int)$this->config->get('payment_crezco_geo_zone_id') . "' AND `country_id` = '" . (int)$address['country_id'] . "' AND (`zone_id` = '" . (int)$address['zone_id'] . "' OR `zone_id` = '0')");

		if ($this->cart->hasSubscription()) {
			$status = false;
		} elseif (!$this->config->get('payment_payze_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = [];

		if ($status) {
			$_config = new \Opencart\System\Engine\Config();
			$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
			$_config->load('payze');
		
			$config_setting = $_config->get('payze_setting');
		
			$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_payze_setting'));
			
			$language_id = $this->config->get('config_language_id');
		
			if (!empty($setting['general']['title'][$language_id])) {
				$title = $setting['general']['title'][$language_id];
			} else {
				$title = $this->language->get('text_title');
			}
						
			$method_data = [
				'code'       => 'payze',
				'title'      => $title,
				'sort_order' => $this->config->get('payment_payze_sort_order')
			];
		}

		return $method_data;
	}
	
	public function addCustomerCard(array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "payze_customer_card` SET `customer_id` = '" . (int)$data['customer_id'] . "', `card_id` = '" . $this->db->escape($data['card_id']) . "', `card_brand` = '" . $this->db->escape($data['card_brand']) . "', `card_mask` = '" . $this->db->escape($data['card_mask']) . "', `expiration_date` = '" . $this->db->escape($data['expiration_date']) . "'");
	}
	
	public function getCustomerCards(int $customer_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "payze_customer_card` WHERE `customer_id` = '" . (int)$customer_id . "'");

		if ($query->num_rows) {
			return $query->rows;
		} else {
			return [];
		}
	}
	
	public function addOrder(array $data): void {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "payze_order` SET `order_id` = '" . (int)$data['order_id'] . "', `transaction_id` = '" . $this->db->escape($data['transaction_id']) . "'");
	}
	
	public function deleteOrder(int $order_id): void {
		$query = $this->db->query("DELETE FROM `" . DB_PREFIX . "payze_order` WHERE `order_id` = '" . (int)$order_id . "'");
	}
	
	public function getOrder(int $order_id): array {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "payze_order` WHERE `order_id` = '" . (int)$order_id . "'");
		
		if ($query->num_rows) {
			return $query->row;
		} else {
			return [];
		}
	}
	
	public function setOrderTotal(int $order_id, float $order_total): void {
		$query = $this->db->query("UPDATE `" . DB_PREFIX . "order` SET `total` = '" . (float)$order_total . "' WHERE `order_id` = '" . (int)$order_id . "'");
		$query = $this->db->query("UPDATE `" . DB_PREFIX . "order_total` SET `value` = '" . (float)$order_total . "' WHERE `order_id` = '" . (int)$order_id . "' AND `code` = 'total'");
	}
	
	public function log(string|array $data, string $title = ''): void {
		$_config = new \Opencart\System\Engine\Config();
		$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
		$_config->load('payze');
		
		$config_setting = $_config->get('payze_setting');
		
		$setting = array_replace_recursive((array)$config_setting, (array)$this->config->get('payment_payze_setting'));
		
		if ($setting['general']['debug']) {
			$log = new \Opencart\System\Library\Log('payze.log');
			
			if (is_string($data)) {
				$log->write('Payze debug (' . $title . '): ' . $data);
			} else {
				$log->write('Payze debug (' . $title . '): ' . json_encode($data));
			}
		}
	}
}