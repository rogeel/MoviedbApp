<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actors_model extends CI_Model {

	//Gets actors by name
	public function search($query,$page){
		
		//We set the API url
		$mode = 'search/person?query=';
		$search = $mode.urlencode($query);
		if($page)
			$search = $search.'&page='.$page;
		$apiKey = '&api_key='.API_KEY; // API_KEY is defined in config/constants.php
		$url_search = URL_API.$search.$apiKey; //URL APIS is defined in config/constants.php
		//We use curl for get the json object 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_search);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($response, true);
		return $result;	
	}

	//Gets an actor by id
	public function get_actor($id){
		
		$mode = 'person/';
		$search = $mode.$id;
		$apiKey = '?api_key='.API_KEY;
		$url_search = URL_API.$search.$apiKey;
		//We use curl for get the json object 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_search);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($response, true);
		return $result;	
	}

	//Gets actor's movies by actor's id
	public function get_actor_credits($id){
		
		$mode = 'person/';
		$search = $mode.$id.'/movie_credits';
		$apiKey = '?api_key='.API_KEY;
		$url_search = URL_API.$search.$apiKey;
		//We use curl for get the json object
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url_search);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));
		$response = curl_exec($ch);
		curl_close($ch);
		$result = json_decode($response, true);
		return $result;
		
	}


}

/* End of file actors_model.php */
/* Location: ./application/models/actors_model.php */