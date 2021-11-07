<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('orangtua_m');
		
	}
	
	public function detail($id){
		$data['mSiswa'] = $data['mOrangtua'] = true;
		$data['row'] = $this->orangtua_m->getById($id);
		$data['content'] = 'siswa/detail_orang_tua';
		$this->load->view('index',$data);
	}

	public function create(){
		$data['mSiswa'] = $data['mOrangtua'] = true;
		$data['content'] = 'siswa/form_orang_tua';
		$this->load->view('index',$data);
	}

	public function update($id){
		$data['mSiswa'] = $data['mOrangtua'] = true;
		$data['edit'] = true;
		$data['row'] = $this->orangtua_m->getById($id);
		$data['content'] = 'siswa/form_orang_tua';
		$this->load->view('index',$data);
	}

	public function save()
	{
		$id = $this->input->post('idorang_tua',true);
		if($id==''){
			$data = [
				'ayah_nama'=>$this->input->post('ayah_nama',true),
				'ayah_nik'=>$this->input->post('ayah_nik',true),
				'ayah_tmp_lahir'=>$this->input->post('ayah_tmp_lahir',true),
				'ayah_tgl_lahir'=>$this->input->post('ayah_tgl_lahir',true),
				'ayah_negara'=>$this->input->post('ayah_negara',true),
				'ayah_agama'=>$this->input->post('ayah_agama',true),
				'ayah_hp'=>$this->input->post('ayah_hp',true),
				'ayah_pend_terakhir'=>$this->input->post('ayah_pend_terakhir',true),
				'ayah_pekerjaan'=>$this->input->post('ayah_pekerjaan',true),
				'ayah_penghasilan'=>$this->input->post('ayah_penghasilan',true),
				'ayah_nama_ibu'=>$this->input->post('ayah_nama_ibu',true),
				'ibu_nama'=>$this->input->post('ibu_nama',true),
				'ibu_nik'=>$this->input->post('ibu_nik',true),
				'ibu_tmp_lahir'=>$this->input->post('ibu_tmp_lahir',true),
				'ibu_tgl_lahir'=>$this->input->post('ibu_tgl_lahir',true),
				'ibu_negara'=>$this->input->post('ibu_negara',true),
				'ibu_agama'=>$this->input->post('ibu_agama',true),
				'ibu_hp'=>$this->input->post('ibu_hp',true),
				'ibu_pend_terakhir'=>$this->input->post('ibu_pend_terakhir',true),
				'ibu_pekerjaan'=>$this->input->post('ibu_pekerjaan',true),
				'ibu_penghasilan'=>$this->input->post('ibu_penghasilan',true),
				'ibu_nama_ibu'=>$this->input->post('ibu_nama_ibu',true),
				'pengguna_id'=>$this->session->userdata('id')
			];
			$this->orangtua_m->tambahData($data);
			$this->session->set_flashdata('success','Anda berhasil menambahkan data Orang Tua');
		}else{
			$data = [
				'ayah_nama'=>$this->input->post('ayah_nama',true),
				'ayah_nik'=>$this->input->post('ayah_nik',true),
				'ayah_tmp_lahir'=>$this->input->post('ayah_tmp_lahir',true),
				'ayah_tgl_lahir'=>$this->input->post('ayah_tgl_lahir',true),
				'ayah_negara'=>$this->input->post('ayah_negara',true),
				'ayah_agama'=>$this->input->post('ayah_agama',true),
				'ayah_hp'=>$this->input->post('ayah_hp',true),
				'ayah_pend_terakhir'=>$this->input->post('ayah_pend_terakhir',true),
				'ayah_pekerjaan'=>$this->input->post('ayah_pekerjaan',true),
				'ayah_penghasilan'=>$this->input->post('ayah_penghasilan',true),
				'ayah_nama_ibu'=>$this->input->post('ayah_nama_ibu',true),
				'ibu_nama'=>$this->input->post('ibu_nama',true),
				'ibu_nik'=>$this->input->post('ibu_nik',true),
				'ibu_tmp_lahir'=>$this->input->post('ibu_tmp_lahir',true),
				'ibu_tgl_lahir'=>$this->input->post('ibu_tgl_lahir',true),
				'ibu_negara'=>$this->input->post('ibu_negara',true),
				'ibu_agama'=>$this->input->post('ibu_agama',true),
				'ibu_hp'=>$this->input->post('ibu_hp',true),
				'ibu_pend_terakhir'=>$this->input->post('ibu_pend_terakhir',true),
				'ibu_pekerjaan'=>$this->input->post('ibu_pekerjaan',true),
				'ibu_penghasilan'=>$this->input->post('ibu_penghasilan',true),
				'ibu_nama_ibu'=>$this->input->post('ibu_nama_ibu',true),
				'pengguna_id'=>$this->session->userdata('id')
			];
			$this->orangtua_m->editData($data,$id);
			$this->session->set_flashdata('success','Anda berhasil mengubah data Orang Tua');
		}
		redirect(base_url('menu/orang_tua'));
	}

	public function delete($id){
		$del = $this->orangtua_m->hapusData($id);
		if($del){
			$this->session->set_flashdata('success','Anda berhasil menghapus data Orang Tua');
		}else{
			$this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
		}
		redirect('menu/orang_tua');
	}

}

/* End of file Orangtua.php */