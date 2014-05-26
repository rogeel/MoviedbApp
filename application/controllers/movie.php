<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Movie extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		//Load the models
		$this->load->model("movie_model");
		$this->load->model("general");
	
	}

	public function index($id)
	{
		//Gets the  API configuration
		$data['config']= $this->general->config();
		//Get movie info
		$result= $this->movie_model->get_movie($id);
		$data['movie']= $result;
		//Load view and send data
		$this->load->view('movie',$data);
	}
}

/* End of file movie.php */
/* Location: ./application/controllers/movie.php */