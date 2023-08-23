<?php
class Naka extends CI_Model {
	public function check_admin($user, $pass)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));
        return $this->db->get();
    }
	function daftar($tabel)
	{
		$data = $this->db->get($tabel);
		return($data);
	}
	function daftar_select($tabel,$id){
		if (strcmp($tabel, 'daftar_pegawai
		')==0){
			$this->db->where('nik',$id);
		}else{
			$this->db->where('id',$id);
		}
		$data = $this->db->get($tabel);
		return($data);
	}
	function list_tgl(){
		$this->db->group_by('tanggal');
		$this->db->order_by('tanggal','DESC');
		$data = $this->db->get('gaji_pegawai');

		return($data);
	}
	function tgl_terbaru(){
		$this->db->group_by('tanggal');
		$this->db->order_by('tanggal','DESC');
		$this->db->select('tanggal');
		$this->db->limit(1, 0);
		$data = $this->db->get('gaji_pegawai');
		return($data);
	}
	function gaji_pegawai($tanggal){
		$this->db->where('tanggal',$tanggal);
		$data = $this->db->get('daftar_gaji');

		return($data);
	}
	function insert_table($data,$tabel){
		$this->db->insert($tabel,$data);
	}
	function update_table($data,$tabel,$id){
		if (strcmp($tabel, 'daftar_pegawai
		')==0) {
			$this->db->where('nik',$id);
			$this->db->update($tabel,$data);
		}else{
			$this->db->where('id',$id);
			$this->db->update($tabel,$data);	
		}
	}
	function delete_table($tabel,$id){
		if (strcmp($tabel, 'daftar_pegawai
		')==0) {
			$this->db->where('nik',$id);
			$this->db->delete($tabel);
		}else{
			$this->db->where('id',$id);
			$this->db->delete($tabel);	
		}
	}
}

?>