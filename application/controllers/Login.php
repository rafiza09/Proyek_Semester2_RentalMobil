<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $data = [];
        $this->load->view('login/index', $data);
        
    }

    public function otentikasi(){
        $this->load->model("users_model","users");
        $_username = $this->input->post('username'); 
        $_password = $this->input->post('password');

        $row = $this->users->login($_username,$_password);
        $data['failed']='Status Failed';

        if(isset($row)){
            $this->session->set_userdata('USERNAME',$row->username);
            $this->session->set_userdata('USERID',$row->id);
            $this->session->set_userdata('ROLE',$row->role);
            $this->session->set_userdata('USER',$row);
            $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
            Berhasil Login!</div>');
            redirect(base_url().'index.php/dashboard');
            
        }

        else{
            $this->session->set_flashdata('massage', '<div class="alert alert-danger" role="alert">
            Maaf Data User Tidak Ditemukan!</div>');
            redirect(base_url().'index.php/dashboard?status=failed') ; 
            
        }

    }

    public function logout(){

        $this->session->unset_userdata('USERNAME');
        $this->session->unset_userdata('ROLE');
        $this->session->unset_userdata('USER');
        redirect(base_url().'index.php/dashboard'); 
    }


}