<?php 
function hakAksesAdmin(){
	$ci =& get_instance();
	
	if($ci->session->userdata('level')!='Admin'){
		redirect('menu');
	}
}
function list_ortu($id){
    
    $ci =& get_instance();
	if($id==null){
		$data = $ci->db->get('orang_tua')->result_array();
	}else{
		$data = $ci->db->get_where('orang_tua',['pengguna_id'=>$id])->result_array();
	}
    return $data;
    
}
function _ortu($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('orang_tua',['pengguna_id'=>$id])->row_array();
    return $data;
    
}
function namaFile($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('dokumen',['iddokumen'=>$id])->row();
    return $data->nama_file;
    
}
function dokumen($id){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('dokumen',['siswa_id'=>$id])->result_array();
    return $data;
    
}

function _profil(){
    
    $ci =& get_instance();
    $data = $ci->db->get_where('profil_sekolah',['idprofil_sekolah'=>1])->row();
    return $data;
    
}
function total($table){
    
    $ci =& get_instance();
    return $ci->db->get($table)->num_rows();

}
function totalSiswa($sts=null){
    
    $ci =& get_instance();
	if($sts!=null){
		return $ci->db->get_where('siswa',['status'=>$sts])->num_rows();
	}
	return $ci->db->get('siswa')->num_rows();

}