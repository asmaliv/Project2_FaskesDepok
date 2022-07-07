<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kecamatan extends CI_Controller {
    public function index(){
        $this->load->model('kecamatan_model','kecamatan');
        $list_kecamatan = $this->kecamatan->getAll();

        $data['list_kecamatan'] = $list_kecamatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('kecamatan_model','kecamatan');

        $_nama = $this->input->post('nama');
        $_id_update = $this->input->post('idedit');

        $data_kecamatan[] = $_nama;

        if(isset($_id_update)){
            $data_kecamatan[] = $_id_update;
            $this->kecamatan->update($data_kecamatan);
        }else{
            $this->kecamatan->create($data_kecamatan);
        }

        redirect(base_url().'index.php/kecamatan/', 'refresh');
    }

    public function update(){
        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model','kecamatan');
        $kec_update = $this->kecamatan->findById($_id);

        $data['kec_update']= $kec_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('kecamatan/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('kecamatan_model','kecamatan');
        $this->kecamatan->delete($_id);
        redirect(base_url('index.php/kecamatan/'));
    }
}