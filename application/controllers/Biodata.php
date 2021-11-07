<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('biodata_m');
		$this->load->model('orangtua_m');
		
	}
	
	public function detail($id){
		$data['mSiswa'] = $data['mBiodata'] = true;
		$data['row'] = $this->biodata_m->getById($id);
		$data['content'] = 'siswa/detail_biodata';
		$this->load->view('index',$data);
	}

	public function create(){
		$data['mSiswa'] = $data['mBiodata'] = true;
		if($this->session->userdata('level')=='Admin'){
			$ortu = $this->orangtua_m->getAll();
		}else{
			$ortu = $this->orangtua_m->getByLogin($this->session->userdata('id'));
		}
		$data['ortu'] = ['' => 'Pilih Orang Tua'] + array_column($ortu, 'ayah_nama', 'idorang_tua');
		$data['content'] = 'siswa/form_biodata';
		$this->load->view('index',$data);
	}

	public function update($id){
		$data['mSiswa'] = $data['mBiodata'] = true;
		$data['edit'] = true;
		if($this->session->userdata('level')=='Admin'){
			$ortu = $this->orangtua_m->getAll();
		}else{
			$ortu = $this->orangtua_m->getByLogin($this->session->userdata('id'));
		}
		$data['ortu'] = ['' => 'Pilih Orang Tua'] + array_column($ortu, 'ayah_nama', 'idorang_tua');
		$data['row'] = $this->biodata_m->getById($id);
		$data['content'] = 'siswa/form_biodata';
		$this->load->view('index',$data);
	}

	public function save()
	{
		$id = $this->input->post('idsiswa',true);
		if($id==''){
			$data = [
				'orang_tua_id'=>$this->input->post('orang_tua_id',true),
				'no_kk'=>$this->input->post('no_kk',true),
				'nik'=>$this->input->post('nik',true),
				'nama_alias'=>$this->input->post('nama_alias',true),
				'nama_lengkap'=>$this->input->post('nama_lengkap',true),
				'jk'=>$this->input->post('jk',true),
				'tmp_lahir'=>$this->input->post('tmp_lahir',true),
				'tgl_lahir'=>$this->input->post('tgl_lahir',true),
				'no_akta'=>$this->input->post('no_akta',true),
				'agama'=>$this->input->post('agama',true),
				'warga_negara'=>$this->input->post('warga_negara',true),
				'anak_ke'=>$this->input->post('anak_ke',true),
				'sdr_kandung'=>$this->input->post('sdr_kandung',true),
				'jml_orang'=>$this->input->post('jml_orang',true),
				'tinggi_badan'=>$this->input->post('tinggi_badan',true),
				'berat_badan'=>$this->input->post('berat_badan',true),
				'alamat'=>$this->input->post('alamat',true),
				'jarak_sekolah'=>$this->input->post('jarak_sekolah',true),
				'berat_lahir'=>$this->input->post('berat_lahir',true),
				'h_penyakit'=>$this->input->post('h_penyakit',true),
				'alergi'=>$this->input->post('alergi',true),
				'k_khusus'=>$this->input->post('k_khusus',true),
				'kelas'=>$this->input->post('kelas',true),
				'u_baju'=>$this->input->post('u_baju',true),
				'no_daftar'=>time(),
				'status'=>'Baru'
			];
			$this->biodata_m->tambahData($data);
			$this->session->set_flashdata('success','Anda berhasil menambahkan data Orang Tua');
		}else{
			$data = [
				'orang_tua_id'=>$this->input->post('orang_tua_id',true),
				'no_kk'=>$this->input->post('no_kk',true),
				'nik'=>$this->input->post('nik',true),
				'nama_alias'=>$this->input->post('nama_alias',true),
				'nama_lengkap'=>$this->input->post('nama_lengkap',true),
				'jk'=>$this->input->post('jk',true),
				'tmp_lahir'=>$this->input->post('tmp_lahir',true),
				'tgl_lahir'=>$this->input->post('tgl_lahir',true),
				'no_akta'=>$this->input->post('no_akta',true),
				'agama'=>$this->input->post('agama',true),
				'warga_negara'=>$this->input->post('warga_negara',true),
				'anak_ke'=>$this->input->post('anak_ke',true),
				'sdr_kandung'=>$this->input->post('sdr_kandung',true),
				'jml_orang'=>$this->input->post('jml_orang',true),
				'tinggi_badan'=>$this->input->post('tinggi_badan',true),
				'berat_badan'=>$this->input->post('berat_badan',true),
				'alamat'=>$this->input->post('alamat',true),
				'jarak_sekolah'=>$this->input->post('jarak_sekolah',true),
				'berat_lahir'=>$this->input->post('berat_lahir',true),
				'h_penyakit'=>$this->input->post('h_penyakit',true),
				'alergi'=>$this->input->post('alergi',true),
				'k_khusus'=>$this->input->post('k_khusus',true),
				'kelas'=>$this->input->post('kelas',true),
				'u_baju'=>$this->input->post('u_baju',true),
				'no_daftar'=>time()
			];
			$this->biodata_m->editData($data,$id);
			$this->session->set_flashdata('success','Anda berhasil mengubah data Orang Tua');
		}
		redirect(base_url('menu/biodata_anak'));
	}

	public function dokumen($id){
		$data['mSiswa'] = $data['mBiodata'] = true;
		$data['row'] = $this->biodata_m->getById($id);
		$data['content'] = 'siswa/dokumen';
		$this->load->view('index',$data);
	}

	public function upload_dok()
	{
		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpeg|jpg|png|bmp';
		$config['max_size']             = 2048;
		$config['encrypt_name']         = true;
    
		$this->load->library('upload', $config);
    
		if ($this->upload->do_upload('nama_file'))
		{
			$img = $this->upload->data();
			$idsiswa = $this->input->post('siswa_id',true);
			$data = [
				'siswa_id'=>$idsiswa,
				'keterangan'=>$this->input->post('keterangan',true),
				'nama_file'=>$img['file_name']
			];
			$this->biodata_m->uploadDokumen($data);
			$this->session->set_flashdata('success','Anda berhasil mengupload Dokumen');
		}else{
			$this->session->set_flashdata('error',$this->upload->display_errors());
		}
		redirect(base_url('biodata/dokumen/'.$idsiswa));
	}

	public function del_dokumen($id){
		$del = unlink('./uploads/'.namaFile($id));
		if($del){
			$this->biodata_m->hapusDok($id);
			$this->session->set_flashdata('success','Anda berhasil menghapus Dokumen');
		}else{
			$this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
		}
		// redirect('menu/biodata_anak');
		echo '<script>javascript:history.back()</script>';
	}

	public function terima()
	{
		if($this->input->post('id')){
			$id = $this->input->post('id');
			for ($i=0; $i < count($id); $i++) { 
				$this->biodata_m->terimaSiswa($id[$i]);
			}
		}
	}
	public function tolak(){
		if($this->input->post('id')){
			$id = $this->input->post('id');
			for ($i=0; $i < count($id); $i++) { 
				$this->biodata_m->tolakSiswa($id[$i]);
			}
		}
	}

	public function excel(){
		$data['siswa'] = $this->biodata_m->getAll();
		$this->load->view('siswa/export_excel',$data);
	}

	public function formulir($id){
		$data['row'] = $this->biodata_m->getById($id);
		$this->load->view('siswa/formulir', $data);
	}

	public function delete($id){
		$del = $this->biodata_m->hapusData($id);
		if($del){
			$this->session->set_flashdata('success','Anda berhasil menghapus data Orang Tua');
		}else{
			$this->session->set_flashdata('error','Maaf, data gagal dihapus, data terikat dengan data lainnya !');
		}
		redirect('menu/biodata_anak');
	}

}

/* End of file Biodata.php */