<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->library('frontend');
		$this->load->model('Post_model');
		$post_model = new Post_model();
		$post_model->get_list(10, 0, '', '');

		$result=$post_model->get_result();
		$data_view=array();
		$data_view['result']=$result;

		$frontend = new Frontend();
		$frontend->set_heading('Welcome To My Blog');
		$frontend->load_view('content/home',$data_view);

		$frontend->render();
	} 
}
