<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        // if($this->session->userdata('username')){
        //     redirect('welcome');
        // }
        $this->load->model('user_m');
    }
    
    public function index()
    {
		$data['content'] = 'auth/login';
        $this->load->view('auth/index',$data);
    }

    public function cek_login(){
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $cek_admin = $this->user_m->cekUsername($username);
        if($cek_admin){
            if(password_verify($password,$cek_admin['password'])){
                $sessionData = [
                    'id'=>$cek_admin['idpengguna'],
                    'fullname'=>$cek_admin['nama_lengkap'],
                    'username'=>$cek_admin['username'],
                    'level'=>$cek_admin['level']
                ];
                $this->session->set_userdata($sessionData);
                redirect('menu');
            }else{
                $this->session->set_flashdata('error','Password yang anda masukkan salah !');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('error','Username yang anda masukkan salah !');
            redirect('login');
        }
    }

    // public function create_admin(){
    //     $data = [
    //         'nama_lengkap'=>'Administrator',
    //         'username'=>'admin',
    //         'password'=>password_hash('admin',PASSWORD_DEFAULT),
    //         'level'=>'Administrator'
    //     ];
    //     $this->db->insert('pengguna',$data);
    // }
}

/* End of file Login.php */