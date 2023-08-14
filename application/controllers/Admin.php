<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$data['judul']='Daftar Barang';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['barang']=$this->Naka->daftar('daftar_barang')->result();
		$this->load->view('Admin/daftar_barang',$data);
	}
	function daftar_pegawai(){
		$data['judul']='Daftar Pegawai';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['pegawai']=$this->Naka->daftar('daftar_pegawai')->result();

		$this->load->view('Admin/daftar_pegawai',$data);
	}
	function daftar_pemasukan(){
		$data['judul']='Daftar Pemasukan';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['pemasukan']=$this->Naka->daftar('daftar_pemasukan')->result();

		$this->load->view('Admin/daftar_pemasukan',$data);
	}
	function daftar_pesanan(){
		$data['judul']='Daftar Pesanan';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['pesanan']=$this->Naka->daftar('daftar_pesanan')->result();
		$this->load->view('Admin/daftar_pesanan',$data);
	}
	function daftar_pengeluaran(){
		$data['judul']='Daftar Pengeluaran';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['pemasukan']=$this->Naka->daftar('daftar_pengeluaran')->result();
		$this->load->view('Admin/daftar_pengeluaran',$data);
	}
	function gaji_pegawai($tanggal='skr'){
		if(strcmp($tanggal, 'skr')==0){
			$tanggal =$this->Naka->tgl_terbaru()->row('tanggal');
		}
		$data['judul']='Gaji Pegawai';
		$this->load->view('Admin/head',$data);
		$this->load->view('Admin/Link');
		$data['tanggal']=$tanggal;
		$data['tgl']=$this->Naka->list_tgl()->result();
		$data['gaji']=$this->Naka->gaji_pegawai($tanggal)->result();
		$this->load->view('Admin/gaji_pegawai',$data);
	}
	function form_daftar_barang(){
		$data['judul']='Tambah Daftar Barang';
		$this->load->view('Admin/form_head',$data);
		$this->load->view('Admin/form_daftar_barang');
		$this->load->view('Admin/form_footer');
	}
	function form_daftar_pegawai(){
		$data['judul']='Tambah Daftar Pegawai';
		$this->load->view('Admin/form_head',$data);
		$this->load->view('Admin/form_pegawai');
		$this->load->view('Admin/form_footer');
	}
	function form_tambah_pemasukan(){
		$data['judul']='Tambah Daftar Pemasukan';
		$this->load->view('Admin/form_head',$data);
		$this->load->view('Admin/form_daftar_pemasukan');
		$this->load->view('Admin/form_footer');
	}
	function form_tambah_pengeluaran(){
		$data['judul']='Tambah Daftar Pengeluaran';
		$this->load->view('Admin/form_head',$data);
		$this->load->view('Admin/form_daftar_pengeluaran');
		$this->load->view('Admin/form_footer');
	}
	function form_pemesanan(){
		$data['judul']='Tambah Pemesanan';
		$this->load->view('Admin/form_head',$data);
		$this->load->view('Admin/form_daftar_pemesanan');
		$this->load->view('Admin/form_footer');
	}
	function form_gaji_pegawai(){
		$data['judul']='Form Gaji';
		$this->load->view('Admin/form_head',$data);
		$data['pegawai']=$this->Naka->daftar('daftar_pegawai')->result();
		$this->load->view('Admin/form_gaji_pegawai',$data);
		$this->load->view('Admin/form_footer');
	}

	function tambah_daftar_barang(){
        $barang = array(
            'id' => 'null',
            'nama_barang' => $_POST['nama_barang'],
            'jenis_bahan' => $_POST['jenis_bahan'],
            'stok_barang' => $_POST['stok_barang'],
            'keterangan' => $_POST['keterangan'],
        );

        $this->Naka->insert_table($barang,'daftar_barang');
        redirect('Admin');
	}

	function tambah_pegawai(){
		$pegawai = array(
            'nik' => $_POST['nik'],
            'nama' => $_POST['nama'],
            'jabatan' => $_POST['jabatan'],
            'alamat' => $_POST['alamat'],
            'masuk' => $_POST['masuk'],
            'keluar' => null,
            'status' => $_POST['status'],
        );
         $this->Naka->insert_table($pegawai,'daftar_pegawai');
        redirect('Admin/daftar_pegawai');
	}
	function tambah_gaji(){
		$data = array(
            'nik' => $_POST['nik'],
            'id' => null,
            'gaji' => $_POST['gaji'],
            'tanggal' =>  $_POST['tanggal'],
        );
         $this->Naka->insert_table($data,'gaji_pegawai');
        redirect('Admin/gaji_pegawai');
	}

}
