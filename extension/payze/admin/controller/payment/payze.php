<?php
namespace Opencart\Admin\Controller\Extension\Payze\Payment;
use \Opencart\System\Helper AS Helper;
class Payze extends \Opencart\System\Engine\Controller {
	private $error = [];
	
	public function index(): void {
		$this->load->language('extension/payze/payment/payze');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = [];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('text_extensions'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment')
		];

		$data['breadcrumbs'][] = [
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payze/payment/payze', 'user_token=' . $this->session->data['user_token'])
		];

		$data['save'] = $this->url->link('extension/payze/payment/payze|save', 'user_token=' . $this->session->data['user_token']);
		$data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment');

		// Setting 		
		$_config = new \Opencart\System\Engine\Config();
		$_config->addPath(DIR_EXTENSION . 'payze/system/config/');
		$_config->load('payze');
		
		$data['setting'] = $_config->get('payze_setting');
		
		$data['setting'] = array_replace_recursive((array)$data['setting'], (array)$this->config->get('payment_payze_setting'));
		
		$data['api_key'] = $this->config->get('payment_payze_api_key');
		$data['api_secret'] = $this->config->get('payment_payze_api_secret');
		
		$data['order_status_id'] = $this->config->get('payment_payze_order_status_id');

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		$data['geo_zone_id'] = $this->config->get('payment_payze_geo_zone_id');

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		$data['status'] = $this->config->get('payment_payze_status');
		$data['sort_order'] = $this->config->get('payment_payze_sort_order');

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payze/payment/payze', $data));
	}

	public function save(): void {
		$this->load->language('extension/payze/payment/payze');
		
		$this->load->model('extension/payze/payment/payze');
						
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->load->model('setting/setting');
			
			$this->model_setting_setting->editSetting('payment_payze', $this->request->post);
			
			$data['success'] = $this->language->get('success_save');
		}
		
		$data['error'] = $this->error;
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($data));
	}
	
	public function install(): void {		
		$this->load->model('extension/payze/payment/payze');
		
		$this->model_extension_payze_payment_payze->install();
		
		$this->load->model('setting/setting');
		
		$this->model_setting_setting->editValue('config', 'config_session_samesite', 'Lax');
		
		$this->load->model('setting/event');
		
		$this->model_setting_event->deleteEventByCode('payze_order_add_history');
		$this->model_setting_event->deleteEventByCode('payze_order_delete_order');
		$this->model_setting_event->deleteEventByCode('payze_customer_delete_customer');
		
		if (VERSION >= '4.0.1.0') {
			$this->model_setting_event->addEvent(['code' => 'payze_order_add_history', 'description' => '', 'trigger' => 'catalog/model/checkout/order/addHistory/before', 'action' => 'extension/payze/payment/payze|order_add_history_before', 'status' => true, 'sort_order' => 1]);
			$this->model_setting_event->addEvent(['code' => 'payze_order_delete_order', 'description' => '', 'trigger' => 'catalog/model/checkout/order/deleteOrder/before', 'action' => 'extension/payze/payment/payze|order_delete_order_before', 'status' => true, 'sort_order' => 2]);
			$this->model_setting_event->addEvent(['code' => 'payze_customer_delete_customer', 'description' => '', 'trigger' => 'admin/model/customer/customer/deleteCustomer/before', 'action' => 'extension/payze/payment/payze|customer_delete_customer_before', 'status' => true, 'sort_order' => 3]);
		} else {
			$this->model_setting_event->addEvent('payze_order_add_history', '', 'catalog/model/checkout/order/addHistory/before', 'extension/payze/payment/payze|order_add_history_before', true, 1);
			$this->model_setting_event->addEvent('payze_order_delete_order', '', 'catalog/model/checkout/order/deleteOrder/before', 'extension/payze/payment/payze|order_delete_order_before', true, 2);
			$this->model_setting_event->addEvent('payze_customer_delete_customer', '', 'admin/model/customer/customer/deleteCustomer/before', 'extension/payze/payment/payze|customer_delete_customer_before', true, 3);
		}
	}
		
	public function uninstall(): void {
		$this->load->model('extension/payze/payment/payze');
		
		$this->model_extension_payze_payment_payze->uninstall();
		
		$this->load->model('setting/event');
		
		$this->model_setting_event->deleteEventByCode('payze_order_add_history');
		$this->model_setting_event->deleteEventByCode('payze_order_delete_order');
		$this->model_setting_event->deleteEventByCode('payze_customer_delete_customer');
	}
	
	public function order(): string {
		if ($this->config->get('payment_payze_status') && !empty($this->request->get['order_id'])) {
			$this->load->language('extension/payze/payment/payze');
			
			$this->load->model('extension/payze/payment/payze');
			
			$order_id = $this->request->get['order_id'];
			
			$payze_order_info = $this->model_extension_payze_payment_payze->getOrder($order_id);
				
			if ($payze_order_info) {
				$data['transaction_id'] = $payze_order_info['transaction_id'];

				return $this->load->view('extension/payze/payment/order', $data);
			}
		}
	}
	
	public function customer_delete_customer_before(string &$route, array &$data): void {
		$this->load->model('extension/payze/payment/payze');

		$customer_id = $data[0];

		$this->model_extension_payze_payment_payze->deleteCustomerCards($customer_id);
	}
	
	private function validate(): bool {
		if (!$this->user->hasPermission('modify', 'extension/payze/payment/payze')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		$this->request->post['payment_payze_api_key'] = trim($this->request->post['payment_payze_api_key']);

		if (Helper\Utf8\strlen($this->request->post['payment_payze_api_key']) != 32) {
			$this->error['api_key'] = $this->language->get('error_api_key');
			$this->error['warning'] = $this->language->get('error_warning');
		} 
		
		$this->request->post['payment_payze_api_secret'] = trim($this->request->post['payment_payze_api_secret']);

		if (Helper\Utf8\strlen($this->request->post['payment_payze_api_secret']) != 32) {
			$this->error['api_secret'] = $this->language->get('error_api_secret');
			$this->error['warning'] = $this->language->get('error_warning');
		} 
		
		return !$this->error;
	}
}
