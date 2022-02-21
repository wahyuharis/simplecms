<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->library('frontend');

		// $this->db->get('post');
		// $this->db->order_by()

		$frontend = new Frontend();
		$frontend->set_heading('Welcome To My Blog');
		$frontend->load_view('content/home');

		$frontend->render();
	} 
}
