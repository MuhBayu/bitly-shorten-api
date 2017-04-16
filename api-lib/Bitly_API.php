<?php

/**
* Bitly Shorten API
* date: 16 Apr 2017
* http://bayuu.net
* http://github.com/MuhBayu
*/

class Bitly_API
{
	protected static $_OAuth;
	protected static $_APIKEY;
	protected static $_SSL_VERIFY;
	protected static $_URI_SERVER;
	protected static $_SHORT_DOMAIN;
	protected static $_OUTPUT_FORMAT;
	public function __construct()
	{
		$this->_SSL_VERIFY = FALSE; // DEFAULT-nya FALSE
		$this->_SHORT_DOMAIN = 'bit.ly'; // DEFAULT domain
		$this->_OUTPUT_FORMAT = 'json'; // DEFAULT format
	}
	public function setAuthID($id) {
		$this->_OAuth = $id;
	}
	public function setApiKey($id) {
		$this->_APIKEY = $id;
	}
	public function setSSL($val=TRUE) {
		$this->_SSL_VERIFY = $val;
	}
	public function setFormat($val='json') {
		$this->_OUTPUT_FORMAT = $val;
	}
	public function setDomain($val=1) {
		if($val == 1) {
			return $this->_SHORT_DOMAIN = 'bit.ly';
		} elseif($val == 2) {
			return $this->_SHORT_DOMAIN = 'j.mp';
		} elseif($val == 3) {
			return $this->_SHORT_DOMAIN = 'bitly.com';
		} else {
			return $this->_SHORT_DOMAIN = 'bit.ly';
		}
	}
	public function showParameters() {
		$param = [
					'longUrl' => 'a long URL to be shortened',
					'domain' => '(optional) the short domain to use - bit.ly, j.mp, bitly.com',
					'format' => '(json, xml, txt) default: json'
				];
		$domain = [
					1 => 'bit.ly', 
					2 => 'j.mp', 
					3 => 'bitly.com'
				];
		$helper['parameters'] = $param;
		$helper['domain'] = $domain;
		return json_encode($helper, JSON_PRETTY_PRINT);
	}

	public function cURL($_PARAM) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $this->_URI_SERVER . $_PARAM);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, $this->_SSL_VERIFY);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
		curl_setopt($ch, CURLOPT_HTTPGET, 1);
		$response 	 = curl_exec($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		$json 		 = json_decode($response);
		curl_close($ch);
		if($status_code == 200) {
			if($this->_OUTPUT_FORMAT == 'json') {
				return json_encode($json, JSON_PRETTY_PRINT);
			} else {
				return $response;	
			}
		}
	}
	public function shortURL($_URL) {
		$this->_URI_SERVER = 'https://api-ssl.bitly.com/v3/shorten?';
		$data = array(
						'login' => $this->_OAuth,
						'apiKey' => $this->_APIKEY,
						'longUrl' => $_URL,
						'domain' => $this->_SHORT_DOMAIN,
						'format' => $this->_OUTPUT_FORMAT
				);
		return $this->cURL(http_build_query($data));
	}
	public function expandURL($_URL) {
		$this->_URI_SERVER = 'https://api-ssl.bitly.com/v3/expand?';
		$data = array(
						'login' => $this->_OAuth,
						'apiKey' => $this->_APIKEY,
						'shortUrl' => $_URL,
						'format' => $this->_OUTPUT_FORMAT
				);
		return $this->cURL(http_build_query($data));
	}
}

?>
