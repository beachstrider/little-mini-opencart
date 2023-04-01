<?php
namespace Opencart\Catalog\Controller\Checkout;
class Checkout extends \Opencart\System\Engine\Controller {
	public function index(): void {
		// Validate cart has products and has stock.
		if ((!$this->cart->hasProducts() && empty($this->session->data['vouchers'])) || (!$this->cart->hasStock() && !$this->config->get('config_stock_checkout'))) {
			$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language')));
		}

		// Validate minimum quantity requirements.
		$products = $this->cart->getProducts();

		foreach ($products as $product) {
			if (!$product['minimum']) {
				$this->response->redirect($this->url->link('checkout/cart', 'language=' . $this->config->get('config_language'), true));

				break;
			}
		}

		$this->load->language('checkout/checkout');

		$this->document->setTitle($this->language->get('heading_title'));

		if (!$this->customer->isLogged()) {
			$data['register'] = $this->load->controller('checkout/register');
		} else {
			$data['register'] = '';
		}

		if ($this->customer->isLogged() && $this->config->get('config_checkout_address')) {
			$data['payment_address'] = $this->load->controller('checkout/payment_address');
		} else {
			$data['payment_address'] = '';
		}

		if ($this->customer->isLogged() && $this->cart->hasShipping()) {
			$data['shipping_address'] = $this->load->controller('checkout/shipping_address');
		}  else {
			$data['shipping_address'] = '';
		}

		if ($this->cart->hasShipping()) {
			$data['shipping_method'] = $this->load->controller('checkout/shipping_method');
		}  else {
			$data['shipping_method'] = '';
		}

		$data['payment_method'] = $this->load->controller('checkout/payment_method');
		$data['confirm'] = $this->load->controller('checkout/confirm');

		$data['section_save_membership'] = $this->load->view('common/section_save_membership');
		$data['section_best_deals'] = $this->load->view('common/section_best_deals');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('checkout/checkout', $data));
	}
}
