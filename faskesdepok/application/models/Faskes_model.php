<?php
class Faskes_model extends CI_Model {
    private $table = 'faskes';

    public function getAll(){
        /* SELECT faskes.id, faskes.nama, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes,
        faskes.deskripsi, faskes.skor_rating, kecamatan.nama as nama_kec, faskes.foto1, faskes.foto2, faskes.foto3,
        faskes.website, faskes.jumlah_dokter, faskes.jumlah pegawai FROM faskes JOIN jenis_faskes
        ON jenis_faskes.id=faskes.jenis_id JOIN kecamatan ON kecamatan.id=faskes.kecamatan_id */

        $this->db->select('faskes.id, faskes.nama, faskes.alamat, faskes.latlong, jenis_faskes.nama as jenis_faskes,
                            faskes.deskripsi, faskes.skor_rating, kecamatan.nama as nama_kec, faskes.foto1, faskes.foto2,
                            faskes.foto3, faskes.website, faskes.jumlah_dokter, faskes.jumlah_pegawai');
        $this->db->from('faskes');
        $this->db->join('jenis_faskes', 'jenis_faskes.id = faskes.jenis_id');
        $this->db->join('kecamatan', 'kecamatan.id = faskes.kecamatan_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function delete($id){
        $sql = "DELETE FROM faskes WHERE id=?";
        $this->db->query($sql,array($id));
    }
}