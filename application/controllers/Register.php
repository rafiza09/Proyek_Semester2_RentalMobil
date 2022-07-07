<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('register/index');
    }

    public function save(){
        $this->load->model("users_model", "users");

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users.email]', [
            'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [
            'matches' => 'Password Harus Sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]', [
            'matches' => 'Password Harus Sama!'
        ]);
       
        if ($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">Gagal Register, Ulangi Kembali!</div>');
            $this->load->view('register/index');
        }
                
        else{
            $_username = $this->input->post('username');
            $_password1 = $this->input->post('password1');
            $_password2 = $this->input->post('password2');
            $_email = $this->input->post('email');
    
            $data_rgs[] = $_username;
            $data_rgs[] = $_password1;
            $data_rgs[] = $_email;
    
            $this->users->save($data_rgs);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">Berhasil Register User, Silahkan Login!</div>');
            redirect(base_url().'index.php/login');
        }
         
    }
}