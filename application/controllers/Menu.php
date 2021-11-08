<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jayapura");
		if(!$this->session->userdata('username')){
			redirect('login');
		}
		$this->load->model('user_m');
		$this->load->model('orangtua_m');
		$this->load->model('biodata_m');
		$this->load->model('profil_m');
		// $this->load->model('proposal_m');
	}

	public function index()
	{
		$data['mDashboard'] = true;
		$data['content'] = 'dashboard';
		$this->load->view('index',$data);
	}

	public function profil_sekolah(){
		$data['mProfil'] = true;
		$data['row'] = $this->profil_m->getById(1);
		$data['content'] = 'profil_sekolah';
		$this->load->view('index',$data);
	}

	public function orang_tua(){
		$data['mSiswa'] = $data['mOrangtua'] = true;
		if($this->session->userdata('level')=='Admin'){
			$data['ortu'] = $this->orangtua_m->getAll();
		}else{
			$data['ortu'] = $this->orangtua_m->getByLogin($this->session->userdata('id'));
		}
		$data['content'] = 'siswa/orang_tua';
		$this->load->view('index',$data);
	}

	public function biodata_anak(){
		$data['mSiswa'] = $data['mBiodata'] = true;
		if($this->session->userdata('level')=='Admin'){
			$data['siswa'] = $this->biodata_m->getAll();
		}else{
			$data['siswa'] = $this->biodata_m->getByOrtu(_ortu($this->session->userdata('id'))['idorang_tua']);
		}
		$data['content'] = 'siswa/biodata';
		$this->load->view('index',$data);
	}

	public function seleksi(){
		hakAksesAdmin();
		$data['mSeleksi'] = true;
		$data['siswa'] = $this->biodata_m->getAll();
		$data['content'] = 'seleksi';
		$this->load->view('index',$data);
	}

	public function pengguna(){
		hakAksesAdmin();
		$data['mPengguna'] = true;
		$data['all_user'] = $this->user_m->getAll();
		$data['content'] = 'pengguna';
		$this->load->view('index',$data);
	}

	public function ubah_password(){
        
		$table = 'pengguna';
		$id = 'idpengguna';

		$data = [ 
			'password'=>password_hash($this->input->post('password',true),PASSWORD_DEFAULT)
		];
		$this->db->update($table,$data,[$id=>$this->input->post('id',true)]);
		$this->session->set_flashdata('success','Anda berhasil mengubah password');
		echo '<script>javascript:history.back()</script>';
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}

/* End of file Menu.php */
