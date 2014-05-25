<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moviesbyactor extends CI_Controller {

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
		$this->load->model("actors_model");
		$this->load->model("general");
	
		
	}

	public function index($id)
	{
		$helper = array();
		$data['config']= $this->general->config();
		$results= $this->actors_model->get_actor_credits($id);
		foreach ($results['cast'] as $key => $row)
			{
			    $helper[$key] = $row['release_date'];
			}
		array_multisort($helper, SORT_DESC, $results['cast']);
		
		$data['credits']= $results['cast'];
		$data['info']= $this->actors_model->get_actor($id);
		$this->load->view('moviesbyactor',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */