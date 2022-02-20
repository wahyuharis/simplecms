<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
    }

    function index(){
        $this->load->library('frontend');

		$frontend = new Frontend();
		$frontend->set_heading('About Page');
		$frontend->load_view('content/about');

		$frontend->render();
    }
}