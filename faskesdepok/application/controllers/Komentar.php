<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Komentar extends CI_Controller {
    public function index(){
        $this->load->model('komentar_model','komentar');
        $list_komentar = $this->komentar->getAll();

        $data['list_komentar'] = $list_komentar;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('komentar_model','komentar');

        $_id_update = $this->input->post('idedit');
        $_tanggal = $this->input->post('tanggal');
        $_isi = $this->input->post('isi');
        $_users_id = $this->input->post('users_id');
        $_faskes_id = $this->input->post('faskes_id');
        $_nilai_rating_id = $this->input->post('nilai_rating_id');

        $data_komentar[]=$_tanggal;
        $data_komentar[]=$_isi;
        $data_komentar[]=$_users_id;
        $data_komentar[]=$_faskes_id;
        $data_komentar[]=$_nilai_rating_id;

        if(isset($_id_update)){
            $data_komentar[] = $_id_update;
            $this->komentar->update($data_komentar);
        }else{
            $this->komentar->create($data_komentar);
        }

        redirect(base_url().'index.php/komentar/');
    }

    public function read(){
        $this->load->model('komentar_model','komentar');
        $list_komentar = $this->komentar->getAll();
        $_id = $this->input->get('id');

        $data['list_komentar'] = $list_komentar;
        $data['komentar']=$this->komentar->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/read',$data);
        $this->load->view('layout/footer');
    }

    public function update(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;

        $this->load->model('faskes_model','faskes');
        $list_faskes = $this->faskes->getAll();
        $data['list_faskes'] = $list_faskes;

        $_id = $this->input->get('id');
        $this->load->model('komentar_model','komentar');
        $komentar_update = $this->komentar->findById($_id);

        $data['komentar_update']= $komentar_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/update',$data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('komentar_model','komentar');
        $this->komentar->delete($_id);
        redirect(base_url('index.php/komentar/'));
    }

    public function comment(){
        $this->load->model('komentar_model','komentar');

        // $_isi = $this->input->post('isi');
        // $_users_id = $this->input->post('users_id');
        // $_faskes_id = $this->input->post('faskes_id');
        // $_nilai_rating_id = $this->input->post('nilai_rating_id');

        // $data_komentar[]=$_users_id;
        // $data_komentar[]=$_isi;
        // $data_komentar[]=$_faskes_id;
        // $data_komentar[]=$_nilai_rating_id;

        // $this->komentar->comment($data_komentar);

        $data = array(
            'isi' => $this->input->post('isi'),
            'users_id' => $this->input->post('users_id'),
            'faskes_id' => $this->input->post('faskes_id'),
            'nilai_rating_id' => $this->input->post('nilai_rating_id')
            );

        $this->komentar->comment($data);

        redirect(base_url());
    }





    public function insert(){
        $this->load->model('users_model','users');
        $list_users = $this->users->getAll();
        $data['list_users'] = $list_users;

        $this->load->model('faskes_model','faskes');
        $list_faskes = $this->faskes->getAll();
        $data['list_faskes'] = $list_faskes;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('komentar/create', $data);
        $this->load->view('layout/footer');
    }
}