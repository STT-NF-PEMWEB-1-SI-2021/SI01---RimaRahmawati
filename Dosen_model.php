<?php
class Dosen_model extends CI_Model{

    private $obj = "dosen";

    public function getAll(){
        $query = $this->db->get($this->obj);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("nidn",$id);
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