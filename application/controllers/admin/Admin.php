<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('grocery_CRUD');
        $this->load->helper('auth_helper');
        is_logedin();
    }

    private function tampil($output = null, $title = "", $custom_js = array())
    {
        $datatampil = array(
            'gci' => $output,
            'navtitle' => 'administrator',
            'menu' => array(
                'Home' => 'admin/admin/index',
                'Post' => 'admin/admin/post',
                'Tags' => 'admin/admin/tags',
            ),
            'custom_js' => $custom_js,
            'title' => $title
        );


        $this->load->view('template/backend.php', (array) $datatampil);
    }

    function index()
    {
        $output = (object)array('output' => '', 'js_files' => array(), 'css_files' => array());
        $this->tampil($output, 'Home');
    }

    function post()
    {
        $crud = new grocery_CRUD();

        $crud->unset_jquery();
        $crud->set_table('post');
        $crud->set_subject('post');

        $crud->set_relation_n_n('tags', 'post_tags_rel', 'tags', 'id_post', 'id_tags', 'tags_name');

        $crud->set_field_upload('img', 'assets/uploads/files');
        $crud->callback_before_upload(array($this, '_upload_callback'));

        $crud->add_fields('slug','title', 'img','content', 'tags');
        $crud->edit_fields('slug','title', 'img','content', 'order', 'tags');

        // $crud->unique_fields(array('slug','title'));

        $crud->callback_before_insert(array($this, '_submit_callback'));
        $crud->callback_before_update(array($this, '_submit_callback'));

        $crud->callback_edit_field('slug', function ($value, $primary_key) {
            return '<input type="text" readonly="" value="'.$value.'" name="slug" class="form-control disabled">';
        });

        $crud->callback_add_field('slug', function ($value, $primary_key) {
            return '<input type="text"  readonly="" value="'.$value.'" name="slug" class="form-control  disabled">';
        });

        // $crud->unset_texteditor('content');

        $custom_js = array();

        $output = $crud->render();
        $this->tampil($output, 'Post', $custom_js);
    }
    function _upload_callback($files_to_upload, $field_info)
    {
        $return = false;

        $file_name = $field_info->encrypted_field_name;

        $type =  $files_to_upload[$file_name]['type'];

        

        if($type=='image/png' ||  $type=='image/jpeg' || $type=='image/jpg' ){
            $return = true;
        }else
        {
            return 'Maaf file yang diupload harus jpg atau png';    
        }


        return $return;
    }

    function _submit_callback($post_array, $primary_key=null) {

        $post_array['slug'] = slugify($post_array['title']);

        return $post_array;
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
