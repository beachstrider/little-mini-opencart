<?php
namespace Opencart\Catalog\Controller\Account;
class Account extends \Opencart\System\Engine\Controller {
	public function index(): void {
		$this->load->language('account/account');

		if (!$this->customer->isLogged() || (!isset($this->request->get['customer_token']) || !isset($this->session->data['customer_token']) || ($this->request->get['customer_token'] != $this->session->data['customer_token']))) {
			$this->session->data['redirect'] = $this->url->link('account/account', 'language=' . $this->config->get('config_language'));

			$this->response->redirect($this->url->link('account/login', 'language=' . $this->config->get('config_language')));
		}

		$this->document->setTitle($this->language->get('heading_title'));
		
		$data['header'] = $this->load->controller('common/header');
		$data['menu'] = $this->load->controller('account/menu', $data);
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('account/account', $data));
	}
}
