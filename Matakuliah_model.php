<?php
class Matakuliah_model extends CI_Model{
    private $tables = "matakuliah";

    public function getAll(){
        $query = $this->db->get($this->tables);
        return $query->result();
    }

    public function findById($id){
        $this->db->where("kode",$id);
        $query = $this->db->get($this->tables);
        return $query->row();
    }

    public function save($data){

    }
    public function update($data){

    }

    public function delete($id){
}
}
?>