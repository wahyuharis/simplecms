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
		$this->load->model('Post_model');


		$limit = 5;
		$page = intval($this->input->get('page'));
		$search = trim($this->input->get('search'));
		$tags = trim($this->input->get('tags'));

		$post_model = new Post_model();
		$post_model->get_list($limit, $page, $search, $tags);

		$config['base_url'] = base_url('post/index/');
		$config['total_rows'] = $post_model->get_count();
		$config['per_page'] = $limit;

		$this->pagination->initialize($config);

		$data = array();
		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $post_model->get_result();

		$heading = 'Blog';
		if (!empty(trim($this->input->get('tags')))) {
			$heading = $this->input->get('tags');
			$heading .= ' Post';
		}

		$frontend = new Frontend();
		$frontend->set_heading(ucwords($heading));
		$frontend->load_view('content/post', $data);

		$frontend->render();
	}

	function detail($slug)
	{
		$this->load->library('frontend');

		$this->load->model('Post_model');
		$post_model = new Post_model();
		$detail = $post_model->get_detail(trim($slug));

		if (!$detail) {
			redirect('z404');
		}

		$data_view=array();
		$data_view['content_detail']=$detail->content;
		$data_view['img']=$detail->img;

		$frontend = new Frontend();
		$frontend->set_heading($detail->title);
		$frontend->load_view('content/detail',$data_view);

		$frontend->render();
	}
}
