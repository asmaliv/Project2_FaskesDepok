<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller {
    public function index(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();

        $data['list_users'] = $list_users;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/index', $data);
        $this->load->view('layout/footer');

        $this->load->view('layout/header', $data);
    }

    public function create(){
        $this->load->model('users_model','users');

        $_id_update = $this->input->post('idedit');
        $_username = $this->input->post('username');
        $_password = $this->input->post('password');
        $_email = $this->input->post('email');
        $_created_at = $this->input->post('created_at');
        $_last_login = $this->input->post('last_login');
        $_status = $this->input->post('status');
        $_role = $this->input->post('role');

        $data_users[]=$_username;
        $data_users[]=$_password;
        $data_users[]=$_email;
        $data_users[]=$_created_at;
        $data_users[]=$_last_login;
        $data_users[]=$_status;
        $data_users[]=$_role;

        if(isset($_id_update)){
            $data_users[] = $_id_update;
            $this->users->update($data_users);
        }else{
            $this->users->create($data_users);
        }

        redirect(base_url().'index.php/users/');
    }

    public function read(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();
        $_id = $this->input->get('id');

        $data['list_users'] = $list_users;
        $data['users']=$this->users->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/read',$data);
        $this->load->view('layout/footer');
    }

    public function update(){
        $_id = $this->input->get('id');
        $this->load->model('users_model','users');
        $users_update = $this->users->findById($_id);

        $data['users_update']= $users_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('users_model','users');
        $this->users->delete($_id);
        redirect(base_url('index.php/users/'));
    }

    public function insert(){

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('users/create');
        $this->load->view('layout/footer');
    }
}