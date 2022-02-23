<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Z404 extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->library('frontend');


		$frontend = new Frontend();
		$frontend->set_heading('404 Page Not Found');
		$frontend->load_view('content/404');

		$frontend->render();
	} 
}
