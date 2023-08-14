<?php
class Naka extends CI_Model {
	function daftar($tabel)
	{
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
}

?>