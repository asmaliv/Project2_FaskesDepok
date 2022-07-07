<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function index(){
        $data = [];
        $this->load->view('register', $data);
    }

    public function save(){
        $this->load->model('users_model','users');
        $_username = $this->input->post('username');
        $_email = $this->input->post('email');
        $_password = $this->input->post('password');
        // $_where = array(
        //     'username'=> $_username,
        //     'password'=> MD5($_password)
        // );

        $data_users[]=$_username;
        $data_users[]=$_email;
        $data_users[]=$_password;
        // $data_user[]=$_where;

        $this->users->register($data_users);

        redirect(base_url().'index.php/login');
    }
}