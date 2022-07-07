<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Jenis_perawatan extends CI_Controller{

    public function index(){
        $this->load->model('jenis_perawatan_model', 'jenis_perawatan');
        $list_jenis_perawatan=$this->jenis_perawatan->getAll();
        $data ['list_jenis_perawatan'] = $list_jenis_perawatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $data['jns']=$this->jenis_perawatan->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Jenis Perawatan';
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('jenis_perawatan_model', 'jenis_perawatan');

        $_id = $this->input->post('id');
        $_nama = $this->input->post('nama');
        $_idedit = $this->input->post('idedit');

        $data_jns[]=$_id;
        $data_jns[]=$_nama;

        if(isset($_idedit)){
            $data_jns[]=$_idedit;
            $this->jenis_perawatan->update($data_jns);
        }

        else{
            $this->jenis_perawatan->save($data_jns);
        }
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Berhasil Ditambahkan/Diubah!</div>');
        redirect(base_url().'index.php/jenis_perawatan/view?id='.$_id, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model', 'jenis_perawatan');
        $jnsedit = $this->jenis_perawatan->findById($_id);
        $data['judul']='Form Kelola Jenis Perawatan';
        $data['jnsedit'] = $jnsedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('jenis_perawatan/update', $data);
        $this->load->view('layout/footer');
    }

   public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('jenis_perawatan_model','jenis_perawatan');
        $this->jenis_perawatan->delete($_id);
        redirect(base_url().'index.php/jenis_perawatan', 'refresh');
    }
}
?>