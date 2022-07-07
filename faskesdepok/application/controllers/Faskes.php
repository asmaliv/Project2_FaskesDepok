<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Faskes extends CI_Controller {
    public function index(){
        $this->load->model('faskes_model','faskes');
        $list_faskes = $this->faskes->getAll();

        $data['list_faskes'] = $list_faskes;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/index', $data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $config['upload_path']          = './dist/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $datainfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++)
        {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];

            $this->upload->do_upload('userfile');
            $datainfo[] = $this->upload->data();

        }

        $data = array(
            'id' => 'default',
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'jenis_id' => $this->input->post('jenis_id'),
            'deskripsi' => $this->input->post('deskripsi'),
            'skor_rating' => $this->input->post('skor_rating'),
            'foto1' => $datainfo[0]['file_name'],
            'foto2' => $datainfo[1]['file_name'],
            'foto3' => $datainfo[2]['file_name'],
            'kecamatan_id' => $this->input->post('kecamatan_id'),
            'website' => $this->input->post('website'),
            'jumlah_dokter' => $this->input->post('jumlah_dokter'),
            'jumlah_pegawai' => $this->input->post('jumlah_pegawai'),
            );

        $this->db->insert('faskes', $data);

        redirect(base_url().'index.php/faskes/');
    }

    public function read(){
        $this->load->model('faskes_model','faskes');
        $list_faskes = $this->faskes->getAll();
        $_id = $this->input->get('id');

        $data['list_faskes'] = $list_faskes;
        $data['faskes']=$this->faskes->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/read',$data);
        $this->load->view('layout/footer');
    }

    public function update(){

        $config['upload_path']          = './dist/img';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $datainfo = array();
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
        for($i=0; $i<$cpt; $i++)
        {
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];

            $this->upload->do_upload('userfile');
            $datainfo[] = $this->upload->data();

        }

        $_id_update = $this->input->post('idedit');
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'latlong' => $this->input->post('latlong'),
            'jenis_id' => $this->input->post('jenis_id'),
            'deskripsi' => $this->input->post('deskripsi'),
            'skor_rating' => $this->input->post('skor_rating'),
            'foto1' => $datainfo[0]['file_name'],
            'foto2' => $datainfo[1]['file_name'],
            'foto3' => $datainfo[2]['file_name'],
            'kecamatan_id' => $this->input->post('kecamatan_id'),
            'website' => $this->input->post('website'),
            'jumlah_dokter' => $this->input->post('jumlah_dokter'),
            'jumlah_pegawai' => $this->input->post('jumlah_pegawai'),
            );

        $this->db->where('id', $_id_update);
        $this->db->update('faskes', $data);

        redirect(base_url().'index.php/faskes/');
    }




    public function insert(){
        $this->load->model('jenisfaskes_model','jenisfaskes');
        $list_jenisfaskes = $this->jenisfaskes->getAll();
        $data['list_jenisfaskes'] = $list_jenisfaskes;

        $this->load->model('kecamatan_model','kecamatan');
        $list_kecamatan = $this->kecamatan->getAll();
        $data['list_kecamatan'] = $list_kecamatan;
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/create', $data);
        $this->load->view('layout/footer');
    }

    public function edit(){
        $this->load->model('jenisfaskes_model','jenisfaskes');
        $list_jenisfaskes = $this->jenisfaskes->getAll();
        $data['list_jenisfaskes'] = $list_jenisfaskes;

        $this->load->model('kecamatan_model','kecamatan');
        $list_kecamatan = $this->kecamatan->getAll();
        $data['list_kecamatan'] = $list_kecamatan;

        $_id = $this->input->get('id');
        $this->load->model('faskes_model','faskes');
        $faskes_update = $this->faskes->findById($_id);

        $data['faskes_update']= $faskes_update;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('faskes/update',$data);
        $this->load->view('layout/footer');
    }
}