<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    public function tampil($output = null, $title="",$custom_js = array()) {
        $datatampil = array(
            'gci' => $output,
            'navtitle' => 'administrator',
            'menu' => array(
                'Home' => 'admin/admin/index',
                'Post' => 'admin/admin/post',
                'Tags' => 'admin/admin/tags',
                // 'Users' => 'admin/admin/users',
            ),
            'custom_js' => $custom_js,
            'title'=>$title
        );


        $this->load->view('template/backend.php', (array) $datatampil);
    }

    function index()
    {


        $output = (object)array('output' => '' , 'js_files' => array() , 'css_files' => array());
        $this->tampil($output);

    }

    function post()
    {
        $crud = new grocery_CRUD();

        $crud->unset_jquery();
        $crud->set_table('post');
        $crud->set_subject('post');

        $crud->set_relation_n_n('tags','post_tags_rel','tags','id_post','id_tags','tags_name');

        $crud->add_fields('title','content','tags');
        $crud->edit_fields('title','content','order','tags');

        $output = $crud->render();
        $this->tampil($output);

    }

    function tags()
    {
        $crud = new grocery_CRUD();

        $crud->unset_jquery();
        $crud->set_table('tags');
        $crud->set_subject('tags');

        $output = $crud->render();
        $this->tampil($output);

    }

    function users()
    {
        $crud = new grocery_CRUD();

        $crud->unset_jquery();
        $crud->set_table('users');
        $crud->set_subject('users');

        $output = $crud->render();
        $this->tampil($output);

    }
}
