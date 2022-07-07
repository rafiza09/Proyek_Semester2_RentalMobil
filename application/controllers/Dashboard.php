<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller{
    public function index(){
        $this->load->model('sewa_model', 'sewa');
        $this->load->model('mobil_model', 'mobil');
        $this->load->model("users_model","users");
        $list_sewa=$this->sewa->getAll();
        $list_mobil=$this->mobil->getAll();
        $data ['list_mobil'] = $list_mobil;
        $data ['list_sewa'] = $list_sewa;
        $this->load->view('dashboard/index',$data);
    }

    public function sewa(){
        $this->load->model('mobil_model', 'mobil');
        $_id=$this->input->get('id');
        $data['mobil'] = $this->mobil->findById($_id);
        $this->load->view('dashboard/sewa', $data);
    }

    public function data(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','sewa');
        $data['swa']=$this->sewa->findById($_id);
        $this->load->view('dashboard/data',$data);
    }

    public function save(){
        $this->load->model('sewa_model', 'sewa');

        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');

        $data_swa[]=$_tanggal_mulai;
        $data_swa[]=$_tanggal_akhir;
        $data_swa[]=$_tujuan;
        $data_swa[]=$_noktp;
        $data_swa[]=$_users_id;
        $data_swa[]=$_mobil_id;

        $this->sewa->save($data_swa);
        $row = $this->sewa->lastId();
        $_id = $row->id;
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Data Berhasil Ditambahkan!</div>');
        redirect(base_url().'index.php/dashboard/data?id='.$_id, 'refresh');
    }
}