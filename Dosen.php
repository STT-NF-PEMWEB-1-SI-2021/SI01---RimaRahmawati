<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

    public function index()
    {
        $this->load->model('Dosen_model','dsn');
        $list_dsn = $this->dsn->getAll();
        $data['list_dsn'] = $list_dsn;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/index',$data);
        $this->load->view('layout/footer');
    }
    public function create(){
        $data['title']='Form Kelola Dosen';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create',$data);
        $this->load->view('layout/footer');

    }

    public function save(){
        
    }

}
?>