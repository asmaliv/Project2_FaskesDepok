<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function index(){
        $data = [];
        $this->load->view('login', $data);
    }

    public function otentikasi(){
        $this->load->model('users_model','users');

        $_username = $this->input->post('username');
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);

        if(isset($row)){// jika user terdaftar di data base
            $this->session->set_userdata('ID',$row->id);
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('CREATED_AT',$row->created_at);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);

            if($this->session->userdata('ROLE')=='administrator'){
                redirect(base_url().'index.php/dashboard');
            } else {redirect(base_url());
                }
        }else{// jika user tidak (username password salah)
            redirect(base_url().'index.php/login?status=failed');
        }
    }

    public function logout(){
        $this->session->unset_userdata('ID');
        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url());
    }
}