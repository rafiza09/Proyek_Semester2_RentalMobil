<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Mobil extends CI_Controller{

    public function index(){
        $this->load->model('mobil_model', 'mobil');
        $list_mobil=$this->mobil->getAll();
        $data ['list_mobil'] = $list_mobil;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('layout/footer');
    }

    public function view(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $data['mbl']=$this->mobil->findById($_id);

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/view',$data);
        $this->load->view('layout/footer');
    }

    public function create(){
        $data['judul']='Form Kelola Mobil';
        
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/create', $data);
        $this->load->view('layout/footer');
    }

    public function save(){
        $this->load->model('mobil_model', 'mobil');
        $_id = $this->input->post('id');
        $_nopol = $this->input->post('nopol');
        $_warna = $this->input->post('warna');
        $_biaya_sewa = $this->input->post('biaya_sewa');
        $_deskripsi = $this->input->post('deskripsi');
        $_cc = $this->input->post('cc');
        $_tahun = $this->input->post('tahun');
        $_merk_id = $this->input->post('merk_id');
        $_foto = $this->input->post('foto');
        $_idedit = $this->input->post('idedit');

        $data_mbl[]=$_id;
        $data_mbl[]=$_nopol;
        $data_mbl[]=$_warna;
        $data_mbl[]=$_biaya_sewa;
        $data_mbl[]=$_deskripsi;
        $data_mbl[]=$_cc;
        $data_mbl[]=$_tahun;
        $data_mbl[]=$_merk_id;
        $data_mbl[]=$_foto;

        if(isset($_idedit)){
            $data_mbl[]=$_idedit;
            $this->mobil->update($data_mbl);
        }

        else{
            $this->mobil->save($data_mbl);
        }
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        Berhasil Ditambahkan/Diubah!</div>');
        redirect(base_url().'index.php/mobil/view?id='.$_id, 'refresh');
    }

    public function edit(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model', 'mobil');
        $mbledit = $this->mobil->findById($_id);
        $data['judul']='Form Kelola Mobil';
        $data['mbledit'] = $mbledit;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mobil/update', $data);
        $this->load->view('layout/footer');
    }

    public function delete(){
        $_id = $this->input->get('id');
        $this->load->model('mobil_model','mobil');
        $this->mobil->delete($_id);
        redirect(base_url().'index.php/mobil', 'refresh');
    }

    public function upload_mobil(){
        
        $config['upload_path']      = './uploads/';
        $config['allowed_types']    = 'jpg|png';
        $config['max_size']         = '2000';
        $config['max_width']        = '1700';
        $config['max_height']       = '1768';
        
        $_id = $this->input->post('id');

        $array = explode('.', $_FILES['foto_mobil']['name']);
        $extension = end($array);
        $this->load->model('mobil_model', 'mobil');
        $edit_mobil = $this->mobil->findById($_id);
        $new_name = $edit_mobil->nopol.'.'.$extension;
        $config['file_name'] = $new_name;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('foto_mobil'))
        {
            $error = array('error' => $this->upload->display_errors());
        }
        else
        {
            $this->load->model('mobil_model', 'mobil');
            $array_data[]= $new_name;
            $array_data[]= $_nopol;
            $this->mobil->update_foto($array_data);
            
            $data = [$new_name, $_id];
            $this->mobil->update_foto($data);
        }
        redirect(base_url().'index.php/mobil/view?id='.$_id);
    }
}
?>