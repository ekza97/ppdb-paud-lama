<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Orangtua_m extends CI_Model {
    
	private $table = 'orang_tua';

	private $id = 'idorang_tua';

	public function getAll(){ 
		return $this->db->order_by($this->id,'DESC')
						->get($this->table)->result_array();
	}

	public function getById($id){ 
		return $this->db->order_by($this->id,'DESC')
						->get_where($this->table,[$this->id=>$id])->row_array();
	}
	public function getByLogin($id){ 
		return $this->db->order_by($this->id,'DESC')
						->get_where($this->table,['pengguna_id'=>$id])->result_array();
	}

	public function tambahData($data){
		$this->db->insert($this->table,$data);
	}

	public function editData($data,$id){
		$this->db->update($this->table,$data,[$this->id=>$id]);
	}

	public function hapusData($id){
		return $this->db->delete($this->table,[$this->id=>$id]);
	}

}

/* End of file Orangtua_m.php */
