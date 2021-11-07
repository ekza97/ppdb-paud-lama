<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('profil_m');
		
	}

	public function save()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png|bmp';
		$config['max_size']             = 2048;
		$config['encrypt_name']         = true;
    
		$this->load->library('upload', $config);
    
		if ($this->upload->do_upload('logo'))
		{
			$img = $this->upload->data();
			$data = [
				'nama'=>$this->input->post('nama',true),
				'email'=>$this->input->post('email',true),
				'alamat'=>$this->input->post('alamat',true),
				'website'=>$this->input->post('website',true),
				'telp'=>$this->input->post('telp',true),
				'prov'=>$this->input->post('prov',true),
				'kab'=>$this->input->post('kab',true),
				'kode_pos'=>$this->input->post('kode_pos',true),
				'logo'=>$img['file_name']
			];
			$edit = $this->profil_m->editData($data,$this->input->post('idprofil_sekolah',true));
			if($edit){
				unlink('./uploads/'.$this->input->post('logo_lama',true));
			}
			$this->session->set_flashdata('success','Anda berhasil mengubah data Profil Sekolah');
		}else{
			$this->session->set_flashdata('error',$this->upload->display_errors());
		}
		redirect(base_url('menu/profil_sekolah'));
	}

}

/* End of file Profil.php */
