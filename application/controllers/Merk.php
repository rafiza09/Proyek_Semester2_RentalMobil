<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Merk extends CI_Controller{

    public function index(){
        $this->load->model('merk_model', 'merk');
        $list_merk=$this->merk->getAll();
        $data ['list_merk'] = $list_merk;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $data['mrk']=$this->merk->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Merk';
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('merk_model', 'merk');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_produk = $this->input->post('produk');
        $_idedit = $this->input->post('idedit');

        $data_mrk[]=$_id;
        $data_mrk[]=$_nama;
        $data_mrk[]=$_produk;

        if(isset($_idedit)){
            $data_mrk[]=$_idedit;
            $this->merk->update($data_mrk);
        }

        else{
            $this->merk->save($data_mrk);
        }
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Berhasil Ditambahkan/Diubah!</div>');
        redirect(base_url().'index.php/merk/view?id='.$_id, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model', 'merk');
        $mrkedit = $this->merk->findById($_id);
        $data['judul']='Form Kelola Merk Mobil';
        $data['mrkedit'] = $mrkedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('merk/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('merk_model','merk');
        $this->merk->delete($_id);
        redirect(base_url().'index.php/merk', 'refresh');
    }
}
?>