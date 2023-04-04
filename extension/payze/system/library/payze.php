<?php
namespace Opencart\System\Library;
class Payze {
	private $server = 'https://payze.io/api/v1';
	private $api_key = '';
	private $api_secret = '';
	private $errors = [];
	private $last_response = [];
		
	public function __construct(string $api_key, string $api_secret) {
		if (!empty($api_key)) {
			$this->api_key = $api_key;
		}
		
		if (!empty($api_secret)) {
			$this->api_secret = $api_secret;
		}
	}
	
	public function justPay(array $data) {
		$result = $this->execute('justPay', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
	
	public function addCard(array $data) {
		$result = $this->execute('addCard', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
	
	public function payWithCard(array $data) {
		$result = $this->execute('payWithCard', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
	
	public function commit(array $data) {
		$result = $this->execute('commit', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
	
	public function refund(array $data) {
		$result = $this->execute('refund', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
	
	public function getTransactionInfo(array $data) {
		$result = $this->execute('getTransactionInfo', $data);
		
		if (!empty($result['response']['transactionId'])) {
			return $result;
		} else {									
			return false;
		}
	}
												
	public function hasErrors(): int {
		return count($this->errors);
	}
	
	public function getErrors(): array {
		return $this->errors;
	}
	
	public function getResponse(): array {
		return $this->last_response;
	}
	
	private function execute(string $method, array $data = array()): array {
		$this->errors = [];

		if ($method && $data) {
			$params = [
				'method' => $method,
				'apiKey' => $this->api_key,
				'apiSecret' => $this->api_secret,
				'data' => $data
			];
			
			$curl_options = [
				CURLOPT_URL => $this->server,
				CURLOPT_HEADER => true,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_INFILESIZE => Null,
				CURLOPT_HTTPHEADER => [],
				CURLOPT_CONNECTTIMEOUT => 20,
				CURLOPT_TIMEOUT => 20
			];
			
			$curl_options[CURLOPT_HTTPHEADER][] = 'Accept-Charset: utf-8';
			$curl_options[CURLOPT_HTTPHEADER][] = 'Accept: application/json';
			$curl_options[CURLOPT_HTTPHEADER][] = 'Accept-Language: en_US';
			$curl_options[CURLOPT_HTTPHEADER][] = 'Content-Type: application/json';
			
			$curl_options[CURLOPT_POST] = true;
			$curl_options[CURLOPT_POSTFIELDS] = json_encode($params);
									
			$ch = curl_init();
			curl_setopt_array($ch, $curl_options); 
			$response = curl_exec($ch);
					
			if (curl_errno($ch)) {
				$curl_code = curl_errno($ch);
				
				$constant = get_defined_constants(true);
				$curl_constant = preg_grep('/^CURLE_/', array_flip($constant['curl']));
				
				$this->errors[] = $curl_constant[$curl_code] . ':' . curl_strerror($curl_code);
			}
	
            $status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
						
			if (($status_code >= 0) && ($status_code < 200)) {
				$this->errors[] = 'Server Not Found (' . $status_code . ')';
			}
			
			if (($status_code >= 300) && ($status_code < 400)) {
				$this->errors[] = 'Page Redirect (' . $status_code . ')';
			}
			
			if ($status_code == 400) {
				$this->errors[] = 'Bad Request (' . $status_code . ')';
			}
						
			if ($status_code == 401) {
				$this->errors[] = 'Unauthorized (' . $status_code . ')';
			}
			
			if ($status_code == 403) {
				$this->errors[] = 'Forbidden (' . $status_code . ')';
			}
			
			if (($status_code >= 404) && ($status_code < 500)) {
				$this->errors[] = 'Page not found (' . $status_code . ')';
			}
			
			if ($status_code >= 500) {
				$this->errors[] = 'Server Error (' . $status_code . ')';
			}
			
			$head = '';
			$body = '';
			
			$parts = explode("\r\n\r\n", $response, 3);
			
			if (isset($parts[0]) && isset($parts[1])) {
				if (($parts[0] == 'HTTP/1.1 100 Continue') && isset($parts[2])) {
					list($head, $body) = [$parts[1], $parts[2]];
				} else {
					list($head, $body) = [$parts[0], $parts[1]];
				}
            }
			
            $response_headers = [];
            $header_lines = explode("\r\n", $head);
            array_shift($header_lines);
			
            foreach ($header_lines as $line) {
                list($key, $value) = explode(':', $line, 2);
                $response_headers[$key] = $value;
            }
			
			curl_close($ch);
			
			if (isset($buffer) && is_resource($buffer)) {
                fclose($buffer);
            }

			$this->last_response = json_decode($body, true);
						
			if (!empty($this->last_response['message'])) {
				$this->errors[] = $this->last_response['message'];
			}
						
			return (array)$this->last_response;		
		}
	}
}