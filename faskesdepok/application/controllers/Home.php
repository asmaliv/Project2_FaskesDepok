<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index(){
        $this->load->model('faskes_model','faskes');
        $list_faskes = $this->faskes->getAll();

        $data['list_faskes'] = $list_faskes;
        $this->load->view('home/index', $data);
    }

    public function insert(){
        $this->load->view('home/comment');
    }
}