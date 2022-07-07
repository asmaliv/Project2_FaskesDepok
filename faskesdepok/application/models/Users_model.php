<?php
class Users_model extends CI_Model {
    private $table = 'users';

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
        $sql = "INSERT INTO users (id, username, password, email, created_at, last_login, status, role)
        VALUES (default, ?, MD5(?), ?, ?, ?, ?, ?)";
        $this->db->query($sql,$data);
    }

    public function update($data){
        $sql = "UPDATE users SET username=?, password=MD5(?), email=?, created_at=?, last_login=?, status=?, role=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE id=?";
        $this->db->query($sql,array($id));
    }

    public function login($uname, $pass){
        $sql = "SELECT id, username, date(created_at) as created_at, role FROM users WHERE username=? and password=MD5(?)";
        $data = [$uname, $pass];
        $query = $this->db->query($sql, $data);
        return $query->row();
    }

    public function register($data){
        $sql = "INSERT INTO users (id, username, email, password, created_at, last_login, status, role)
        VALUES (default, ?, ?, MD5(?), now(), now(), 1, 'public')";
        $this->db->query($sql,$data);
    }
}