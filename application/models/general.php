<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Model {

	//create
	

	public function config(){
		
		$mode = 'configuration';
		$apiKey = '?api_key='.API_KEY;
		
		$url_search = URL_API.$mode.$apiKey;
		//return $url_search;
		//echo json_decode($this->curl->simple_get($url_search));
		$ca = curl_init();
		curl_setopt($ca, CURLOPT_URL, $url_search);
		curl_setopt($ca, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ca, CURLOPT_HEADER, FALSE);
		curl_setopt($ca, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ca);
		curl_close($ca);
		//var_dump($response);
		$config = json_decode($response, true);
		return $config;
		
	}

	
	

	

}

/* End of file referidos_model.php */
/* Location: ./application/models/referidos_model.php */