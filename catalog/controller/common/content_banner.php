<?php
namespace Opencart\Catalog\Controller\Common;
class ContentBanner extends \Opencart\System\Engine\Controller {
	public function index(): string {
		$this->load->model('design/layout');

		if (isset($this->request->get['route'])) {
			$route = (string)$this->request->get['route'];
		} else {
			$route = 'common/home';
		}

		$data['about'] = $this->url->link('information/information', 'language=' . $this->config->get('config_language') . '&information_id=1');

		return $this->load->view('common/content_banner', $data);
	}
}
