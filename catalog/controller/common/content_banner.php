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

		$data[] = "";

		return $this->load->view('common/content_banner', $data);
	}
}
