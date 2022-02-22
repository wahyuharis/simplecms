<?php

function is_logedin()
{
    $ci = &get_instance();

    $username = $ci->session->userdata('username');
    $password = $ci->session->userdata('password');

    $ci->db->where('username', $username);
    $ci->db->where('password', $password);
    $db = $ci->db->get('users');

    if ($db->num_rows() < 1) {
        $ci->session->set_flashdata('message', 'Maaf Periksa Username Dan Password Anda');
        redirect('login');
    }
}
