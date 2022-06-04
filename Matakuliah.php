<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {

    public function index()
    {
        $this->load->model('Matakuliah_model','mk');
        $list_mk = $this->mk->getAll();
        $data['list_mk'] = $list_mk;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/index',$data);
        $this->load->view('layout/footer');
    }
    public function create(){
        $data['jdl']='Form Kelola Matakuliah';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/create',$data);
        $this->load->view('layout/footer');

    }

    public function save(){
        $this->load->model('matakuliah_model','mk1');

        $this->mk1->nama = $this->input->post('nama');
        $this->mk1->sks = $this->input->post('sks');
        $this->mk1->kode = $this->input->post('kode');

        //die(print_r($this->mhs1));
        $data['mk1']=$this->mk1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('matakuliah/view',$data);
        $this->load->view('layout/footer');

    }

}
?>