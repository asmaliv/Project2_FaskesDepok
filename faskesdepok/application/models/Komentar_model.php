<?php
class Komentar_model extends CI_Model {
    private $table = 'komentar';

    public function getAll(){
        /* SELECT komentar.id, komentar.tanggal, users.username as nama_users, faskes.nama as nama_faskes, 
        nilai_rating.nama as nama_rating FROM komentar JOIN users on komentar.users_id=users.id JOIN faskes 
        on komentar.faskes_id=faskes.id JOIN nilai_rating on komentar.nilai_rating_id=nilai_rating.id; */

        $this->db->select('komentar.id, komentar.tanggal, komentar.isi, komentar.users_id, users.username as nama_users, faskes.nama as nama_faskes, nilai_rating.nama as nama_rating');
        $this->db->from('komentar');
        $this->db->join('users', 'users.id = komentar.users_id');
        $this->db->join('faskes', 'faskes.id = komentar.faskes_id');
        $this->db->join('nilai_rating', 'nilai_rating.id = komentar.nilai_rating_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function create($data){
        $sql = "INSERT INTO komentar (id, tanggal, isi, users_id, faskes_id, nilai_rating_id)
        VALUES (default, ?, ?, ?, ?, ?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE komentar SET tanggal=?, isi=?, users_id=?, faskes_id=?, nilai_rating_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql,array($id));
    }

    public function comment($data){
        $sql = "INSERT INTO komentar (id, tanggal, isi, users_id, faskes_id, nilai_rating_id)
        VALUES (default, now(), ?, ?, ?, ?)";
        $this->db->query($sql,$data);
    }
}