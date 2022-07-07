<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Perawatan extends CI_Controller{

    public function index(){
        $this->load->model('perawatan_model', 'perawatan');
        $list_perawatan=$this->perawatan->getAll();
        $data ['list_perawatan'] = $list_perawatan;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model','perawatan');
        $data['prw']=$this->perawatan->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Perawatan Mobil';
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('perawatan_model', 'perawatan');
        $_id = $this->input->post('id');
        $_tanggal = $this->input->post('tanggal');
        $_biaya = $this->input->post('biaya');
        $_km_mobil = $this->input->post('km_mobil');
        $_deskripsi = $this->input->post('deskripsi');
        $_mobil_id = $this->input->post('mobil_id');
        $_jenis_perawatan_id = $this->input->post('jenis_perawatan_id');
        $_idedit = $this->input->post('idedit');

        $data_prw[]=$_id;
        $data_prw[]=$_tanggal;
        $data_prw[]=$_biaya;
        $data_prw[]=$_km_mobil;
        $data_prw[]=$_deskripsi;
        $data_prw[]=$_mobil_id;
        $data_prw[]=$_jenis_perawatan_id;

        if(isset($_idedit)){
            $data_prw[]=$_idedit;
            $this->perawatan->update($data_prw);
        }

        else{
            $this->perawatan->save($data_prw);
        }
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Berhasil Ditambahkan/Diubah!</div>');
        redirect(base_url().'index.php/perawatan/view?id='.$_id, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model', 'perawatan');
        $prwedit = $this->perawatan->findById($_id);
        $data['judul']='Form Kelola Perawatan Mobil';
        $data['prwedit'] = $prwedit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('perawatan/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('perawatan_model','perawatan');
        $this->perawatan->delete($_id);
        redirect(base_url().'index.php/perawatan', 'refresh');
    }
}
?>