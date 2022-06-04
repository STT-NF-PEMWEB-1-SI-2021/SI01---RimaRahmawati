<?php
class Mahasiswa_model extends CI_Model{

    private $_table = "mahasiswa";

    public function getAll(){
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("nim",$id);
        $query = $this->db->get($this->_table);
        return $query->row();
    }

    public function save($data){

    }
    public function update($data){

    }

    public function delete($id){
}

}