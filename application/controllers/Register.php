<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('user_m');
    }
    

    public function index()
    {
		$data['content'] = 'auth/register';
        $this->load->view('auth/index',$data);
        
    }

    public function create(){
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|is_unique[pengguna.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE)
        {
            // $this->session->set_flashdata('error',validation_errors('',''));
            // redirect(base_url('register'));
			$data['content'] = 'auth/register';
            $this->load->view('auth/index',$data);
        }
        else
        {
            $data = [
                'nama_lengkap'=>$this->input->post('nama_lengkap',true),
                'username'=>$this->input->post('username',true),
                'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT),
                'level'=>'Siswa'
            ];
            $this->user_m->tambahBaru($data);
            $this->session->set_flashdata('success','Anda berhasil membuat akun baru, Silahkan Login');
            redirect(base_url('login'));
        }
        
        
    }

}

/* End of file Register.php */