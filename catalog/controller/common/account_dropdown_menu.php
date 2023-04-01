<?php
namespace Opencart\Catalog\Controller\Common;
class AccountDropdownMenu extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->language('account/account');
		$this->load->language('account/menu');

		$data['edit'] = $this->url->link('account/edit', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['password'] = $this->url->link('account/password', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['address'] = $this->url->link('account/address', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['payment_method'] = $this->url->link('account/payment_method', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['wishlist'] = $this->url->link('account/wishlist', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['order'] = $this->url->link('account/order', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['subscription'] = $this->url->link('account/subscription', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['download'] = $this->url->link('account/download', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		if ($this->config->get('total_reward_status')) {
			$data['reward'] = $this->url->link('account/reward', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		} else {
			$data['reward'] = '';
		}

		$data['return'] = $this->url->link('account/returns', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['transaction'] = $this->url->link('account/transaction', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
		$data['newsletter'] = $this->url->link('account/newsletter', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

		if ($this->config->get('config_affiliate_status')) {
			$data['affiliate'] = $this->url->link('account/affiliate', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);

			$this->load->model('account/affiliate');

			$affiliate_info = $this->model_account_affiliate->getAffiliate($this->customer->getId());

			if ($affiliate_info) {
				$data['tracking'] = $this->url->link('account/tracking', 'language=' . $this->config->get('config_language') . '&customer_token=' . $this->session->data['customer_token']);
			} else {
				$data['tracking'] = '';
			}
		} else {
			$data['affiliate'] = '';
		}

		$data['logout'] = $this->url->link('account/logout', 'language=' . $this->config->get('config_language'));

		$data['name'] = $this->customer->getFirstName() . ' ' . $this->customer->getLastName();
		$data['email'] = $this->customer->getEmail();

		return $this->load->view('common/account_dropdown_menu', $data);
	}
}
