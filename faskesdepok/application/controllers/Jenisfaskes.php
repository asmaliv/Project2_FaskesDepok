<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenisfaskes extends CI_Controller {
    public function index(){
        $this->load->model('jenisfaskes_model','jenisfaskes');
        $list_jenisfaskes = $this->jenisfaskes->getAll();

        $data['list_jenisfaskes'] = $list_jenisfaskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisfaskes/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $this->load->model('jenisfaskes_model','jenisfaskes');

        $_nama = $this->input->post('nama');
        $_id_update = $this->input->post('idedit');

        $data_jenisfaskes[] = $_nama;

        if(isset($_id_update)){
            $data_jenisfaskes[] = $_id_update;
            $this->jenisfaskes->update($data_jenisfaskes);  
        }else{
            $this->jenisfaskes->create($data_jenisfaskes);   
        }

        redirect(base_url().'index.php/jenisfaskes/', 'refresh');
    }

    public function update(){
        $_id = $this->input->get('id');
        $this->load->model('jenisfaskes_model','jenisfaskes');
        $jenfaskes_update = $this->jenisfaskes->findById($_id);

        $data['jenfaskes_update']= $jenfaskes_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenisfaskes/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('jenisfaskes_model','jenisfaskes');
        $this->jenisfaskes->delete($_id);
        redirect(base_url('index.php/jenisfaskes/'));
    }
}