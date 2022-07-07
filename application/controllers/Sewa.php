<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Sewa extends CI_Controller{

    public function index(){
        $this->load->model('sewa_model', 'sewa');
        $list_sewa=$this->sewa->getAll();
        $data ['list_sewa'] = $list_sewa;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','sewa');
        $data['swa']=$this->sewa->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Sewa Mobil';
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('sewa_model', 'sewa');

        $_tanggal_mulai = $this->input->post('tanggal_mulai');
        $_tanggal_akhir = $this->input->post('tanggal_akhir');
        $_tujuan = $this->input->post('tujuan');
        $_noktp = $this->input->post('noktp');
        $_users_id = $this->input->post('users_id');
        $_mobil_id = $this->input->post('mobil_id');
        $_idedit = $this->input->post('idedit');

        $data_swa[]=$_tanggal_mulai;
        $data_swa[]=$_tanggal_akhir;
        $data_swa[]=$_tujuan;
        $data_swa[]=$_noktp;
        $data_swa[]=$_users_id;
        $data_swa[]=$_mobil_id;
        

        if(isset($_idedit)){
            $data_swa[]=$_idedit;
            $this->sewa->update($data_swa);
            $_id = $id;
        }

        else{
            $this->sewa->save($data_swa);
            $row = $this->users->lastId();
            $_id = $row->id;
        }
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Berhasil Ditambahkan/Diubah!</div>');
        redirect(base_url().'index.php/sewa/view?id='.$_id, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model', 'sewa');
        $swaedit = $this->sewa->findById($_id);
        $data['judul']='Form Kelola Sewa Mobil';
        $data['swaedit'] = $swaedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('sewa/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('sewa_model','sewa');
        $this->sewa->delete($_id);
        redirect(base_url().'index.php/sewa', 'refresh');
    }


}
?>