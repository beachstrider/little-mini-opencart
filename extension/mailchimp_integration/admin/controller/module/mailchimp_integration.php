<?php
//==============================================================================
// MailChimp Integration (v4 installer)
// 
// Author: Clear Thinking, LLC
// E-mail: johnathan@getclearthinking.com
// Website: http://www.getclearthinking.com
// 
// All code within this file is copyright Clear Thinking, LLC.
// You may not copy or reuse code within this file without written permission.
//==============================================================================

namespace Opencart\Admin\Controller\Extension\MailchimpIntegration\Module;
class MailchimpIntegration extends \Opencart\System\Engine\Controller {
	
	private $type = 'module';
	private $name = 'mailchimp_integration';
	
	//==============================================================================
	// index()
	//==============================================================================
	public function index() {
		// Load extension data
		$data = $this->load->language('extension/' . $this->name . '/' . $this->type . '/' . $this->name);

		$data['type'] = $this->type;
		$data['name'] = $this->name;
		$data['token'] = $this->session->data['user_token'];
		$data['exit'] = $this->url->link('marketplace/extension&type=' . $this->type . '&token=' . $data['token'], '', 'SSL');
		
		// Render
		$this->document->setTitle($data['heading_title']);
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$template_file = DIR_EXTENSION . $this->name . '/admin/view/template/' . $this->type . '/' . $this->name . '.twig';
		
		if (is_file($template_file)) {
			extract($data);
			
			ob_start();
			require($template_file);
			$output = ob_get_clean();
			
			$output = str_replace(array('&token=', '&amp;token='), '&user_token=', $output);
			
			echo $output;
		} else {
			echo 'Error loading template file: ' . $template_file;
		}
	}
	
	//==============================================================================
	// curlRequest()
	//==============================================================================
	private function curlRequest($url, $data) {
		$curl = curl_init($url);
		
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl, CURLOPT_FORBID_REUSE, true);
		curl_setopt($curl, CURLOPT_FRESH_CONNECT, true);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_TIMEOUT, 30);
		
		$response = curl_exec($curl);
		curl_close($curl);
		
		return $response;
	}
	
	//==============================================================================
	// verify()
	//==============================================================================
	public function verify() {
		$language = $this->load->language('extension/' . $this->name . '/' . $this->type . '/' . $this->name);
		
		if (!$this->user->hasPermission('modify', 'extension/' . $this->name . '/' . $this->type . '/' . $this->name)) {
			echo $language['standard_error'];
			return;
		}
		
		if (empty($this->request->post['key'])) {
			echo $language['error_blank'];
			return;
		}
		
		// get zip data
		$this->request->post['extension'] = $language['heading_title'];
		$this->request->post['version'] = VERSION;
		$this->request->post['domain'] = HTTP_CATALOG;
		$this->request->post['ip'] = $this->request->server['REMOTE_ADDR'];
		
		$zip_file = $this->curlRequest('https://www.getclearthinking.com/downloads/install', $this->request->post);
		
		if (strpos($zip_file, '<i class="fa') === 0) {
			echo $zip_file;
			return;
		}
		
		$temp_zip = DIR_DOWNLOAD . 'clearthinking.zip';
		$file = fopen($temp_zip, 'w+');
		fwrite($file, $zip_file);
		fclose($file);
		
		// unzip bundle
		$temp_directory = DIR_DOWNLOAD . 'clearthinking/';
		$zip = new \ZipArchive();

		if ($zip->open($temp_zip)) {
			$zip->extractTo($temp_directory);
			$zip->close();
		} else {
			echo '<b>Error:</b> Zip archive failed to unzip';
			return;
		}
		
		@unlink($temp_zip);
		
		// unzip second bundle
		$second_zip = $temp_directory . 'OpenCart 4.0 Versions.zip';
		$zip = new \ZipArchive();
		
		if ($zip->open($second_zip)) {
			$zip->extractTo($temp_directory);
			$zip->close();
		} else {
			echo '<b>Error:</b> Zip archive failed to unzip';
			return;
		}
		
		@unlink($second_zip);
		
		// unzip third bundle
		$third_zip = $temp_directory . $this->name . '.ocmod.zip';
		$zip = new \ZipArchive();
		
		if ($zip->open($third_zip)) {
			$zip->extractTo(DIR_EXTENSION . $this->name . '/');
			$zip->close();
		} else {
			echo '<b>Error:</b> Zip archive failed to unzip';
			return;
		}
		
		@unlink($third_zip);
		
		// get rid of unnecessary files
		if (file_exists($temp_directory . 'instructions.txt'))						@unlink($temp_directory . 'instructions.txt');
		if (file_exists($temp_directory . 'license.txt'))							@unlink($temp_directory . 'license.txt');
		if (file_exists($temp_directory . 'releasenotes.txt'))						@unlink($temp_directory . 'releasenotes.txt');
		if (file_exists($temp_directory . 'OpenCart 1.5 Versions.zip'))				@unlink($temp_directory . 'OpenCart 1.5 Versions.zip');
		if (file_exists($temp_directory . 'OpenCart 2.0-2.2 Versions.ocmod.zip'))	@unlink($temp_directory . 'OpenCart 2.0-2.2 Versions.ocmod.zip');
		if (file_exists($temp_directory . 'OpenCart 2.3-3.0 Versions.ocmod.zip'))	@unlink($temp_directory . 'OpenCart 2.3-3.0 Versions.ocmod.zip');
		if (file_exists($temp_directory . 'OpenCart 2.3 Versions.ocmod.zip'))		@unlink($temp_directory . 'OpenCart 2.3 Versions.ocmod.zip');
		if (is_dir($temp_directory))												@rmdir($temp_directory);
		
		// finish
		echo 'success';
	}
	
}
?>