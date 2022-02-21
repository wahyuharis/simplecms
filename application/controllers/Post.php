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
		$this->load->library('pagination');


		$limit=5;
		$page=intval($this->input->get('page'));
		$start=page_to_start($page,$limit);

		$this->db->limit($limit, $start);
		$db = $this->db->get('post');

		$db2 = $this->db->get('post');


		$config['base_url'] = base_url('post/index/');
		$config['total_rows'] = $db2->num_rows();
		$config['per_page'] = $limit;
		// print_r2($db->result_array());
		$this->pagination->initialize($config);

		$data=array();
		$data['pagination']=$this->pagination->create_links();
		$data['result']=$db->result();

		$frontend = new Frontend();
		$frontend->set_heading('Welcome To My Blog');
		$frontend->load_view('content/post',$data);

		$frontend->render();
	}
}
