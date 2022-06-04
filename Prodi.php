<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

    public function index(){
        $this->load->model('prodi_model','prodi');
        $list_prodi = $this->prodi->getAll();
        $data['list_prodi'] = $list_prodi;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['Title']='Form Kelola Program Studi';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create',$data);
        $this->load->view('layout/footer');

    }

    
}