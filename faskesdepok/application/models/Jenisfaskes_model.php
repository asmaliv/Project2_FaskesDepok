<?php
class Jenisfaskes_model extends CI_Model {
    private $table = 'jenis_faskes';

    public function getAll(){
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        return $query->row();
    }

    public function create($data){
        $sql = "INSERT INTO jenis_faskes (id, nama) VALUES (default, ?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE jenis_faskes SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM jenis_faskes WHERE id=?";
        $this->db->query($sql,array($id));
    }
}