<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_m extends CI_Model {

	private $table = 'profil_sekolah';

	private $id = 'idprofil_sekolah';

	public function getById($id){ 
		return $this->db->get_where($this->table,[$this->id=>$id])->row_array();
	}

	public function editData($data,$id){
		return $this->db->update($this->table,$data,[$this->id=>$id]);
	}

}

/* End of file Profil_m.php */
