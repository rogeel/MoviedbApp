<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie_model extends CI_Model {

	//Gets movies by title
	public function search($query,$page){
		
		//Set the API url
		$mode = 'search/movie?query=';
		$search = $mode.urlencode($query);
		if($page)
			$search = $search.'&page='.$page;
		$apiKey = '&api_key='.API_KEY; // API_KEY is defined in config/constants.php
		$url_search = URL_API.$search.$apiKey; //URL APIS is defined in config/constants.php
		//Use curl for get the json object 
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

	//Gets a movie by id
	public function get_movie($id){
		
		$mode = 'movie/';
		$search = $mode.$id;
		$apiKey = '?api_key='.API_KEY;
		$url_search = URL_API.$search.$apiKey;
		//Use curl for get the json object 
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

/* End of file movie_model.php */
/* Location: ./application/models/movie_model.php */