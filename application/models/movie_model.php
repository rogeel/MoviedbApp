<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie_model extends CI_Model {

	//create
	public function search($query,$page){
		
		$mode = 'search/movie?query=';
		$search = $mode.urlencode($query);
		if($page)
			$search = $search.'&page='.$page;
		$apiKey = '&api_key='.API_KEY;
		$url_search = URL_API.$search.$apiKey;

		//return $url_search;
		
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


	public function get_movie($id){
		
		$mode = 'movie/';
		$search = $mode.$id;
		$apiKey = '?api_key='.API_KEY;
		$url_search = URL_API.$search.$apiKey;
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

/* End of file referidos_model.php */
/* Location: ./application/models/referidos_model.php */