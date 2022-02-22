<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login');
    }

    function logout(){
        session_destroy();
        redirect('login');
    }

    function submit()
    {

        $username = in_post('username');
        $password = in_post('password');

        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $db = $this->db->get('users');

        // print_r2($db->row_array());

        if ($db->num_rows() < 1) {
            $this->session->set_flashdata('message', 'Maaf Periksa Username Dan Password Anda');
            redirect('login');
        } else {
            $userdata = $db->row_array();
            $this->session->set_userdata($userdata);
            redirect('admin/admin/index');
        }
    }
}
