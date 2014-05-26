<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General extends CI_Model {

	//Gets the API configuration
	public function config(){
		
		//We set the API url
		$mode = 'configuration';
		$apiKey = '?api_key='.API_KEY; // API_KEY is defined in config/constants.php
		$url_search = URL_API.$mode.$apiKey;  //URL APIS is defined in config/constants.php
		//We use curl for get the json object 
		$ca = curl_init();
		curl_setopt($ca, CURLOPT_URL, $url_search);
		curl_setopt($ca, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ca, CURLOPT_HEADER, FALSE);
		curl_setopt($ca, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ca);
		curl_close($ca);
		$config = json_decode($response, true);
		return $config;
		
	}

	
	

	

}

/* End of file referidos_model.php */
/* Location: ./application/models/referidos_model.php */