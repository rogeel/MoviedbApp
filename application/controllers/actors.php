<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Actors extends CI_Controller {

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
		//Load the models for the searches and the pagination library for create the pagination
		$this->load->model("actors_model");
		$this->load->model("general");
		$this->load->library("pagination");
	}

	public function index()
	{
		//Gets the  API configuration 
		$data['config']= $this->general->config();
		//Gets search results, We send the string query and page's number, if are the first results we don't send page's number.
		$data['result']= $this->actors_model->search($this->input->get('query'),$this->input->get('page'));
		//Sets the pagination library
		$config["total_rows"] = $data['result']['total_results'];
		$config["per_page"] = 20; // Number of results returned by the API
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = true;
		$config['query_string_segment'] = 'page';
 		$config["base_url"] = current_url().'?query='.urlencode($this->input->get('query')); // Get the current url to use it on pagination's link
 		//Customizes the links for bootstrap
 		$config['full_tag_open'] = '<ul class="pagination pull-right">';
		$config['full_tag_close'] = '</ul>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0)">';
		$config['cur_tag_close'] = '</li></a>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        //Send links
		$data["links"] = $this->pagination->create_links();
		//Load view and send data
		$this->load->view('actors',$data);
	}
}

/* End of file actors.php */
/* Location: ./application/controllers/actors.php */