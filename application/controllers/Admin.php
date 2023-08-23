<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
        parent::__construct();
        if (isset($this->session->userdata['admin'])) {
        } else {
            redirect(base_url());
        }
    }
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
            'nama_barang' => $_POST['nama_barang'],
            'jenis_bahan' => $_POST['jenis_bahan'],
            'stok_barang' => $_POST['stok_barang'],
            'keterangan' => $_POST['keterangan'],
        );

        $this->Naka->insert_table($barang,'daftar_barang');
        redirect('Admin');
	}
	function register(){
        $data = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
        );
        print_r($data);
        $this->Naka->insert_table($data,'admin');
        // redirect('Home');
	}

	function tambah_pegawai(){
		$pegawai = array(
            'nik' => $_POST['nik'],
            'nama' => $_POST['nama'],
            'jabatan' => $_POST['jabatan'],
            'alamat' => $_POST['alamat'],
            'masuk' => $_POST['masuk'],
            'status' => $_POST['status'],
        );
         $this->Naka->insert_table($pegawai,'daftar_pegawai');
        redirect('Admin/daftar_pegawai');
	}
	function tambah_gaji(){
		$data = array(
            'nik' => $_POST['nik'],
            'gaji' => $_POST['gaji'],
            'tanggal' =>  $_POST['tanggal'],
        );
         $this->Naka->insert_table($data,'gaji_pegawai');
        redirect('Admin/gaji_pegawai');
	}
	function tambah_pemesanan(){
		$data = array(
            'tanggal' => $_POST['tanggal'],
            'nama_pemesan' => $_POST['nama_pemesan'],
            'jenis_pesanan' =>  $_POST['jenis_pesanan'],
            'qty' =>  $_POST['qty'],
            'harga_satuan' =>  $_POST['harga_satuan'],
            'jumlah' =>  $_POST['qty']*$_POST['harga_satuan'],
            'DP' =>  $_POST['DP'],
            'keterangan' =>  $_POST['keterangan'],
        );
         $this->Naka->insert_table($data,'daftar_pesanan');
        redirect('Admin/daftar_pesanan');
	}
	 public function tambah_pengeluaran()
    {
        $data['judul'] = 'Form Tambah Pengeluaran';
        $config['upload_path']  = './Aset/bukti';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('bukti_struk')) {
        	$file = $this->upload->data();
	       	$data = array(
	            'bukti_struk' => $file['file_name'],
	            'tanggal' => $_POST['tanggal'],
				'jenis_barang' => $_POST['jenis_barang'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
	        );
         	    	
        }else{
        	 $data = array(
	        'tanggal' => $_POST['tanggal'],
	        'jenis_barang' => $_POST['jenis_barang'],
	        'harga' => $_POST['harga'],
			'qty' => $_POST['qty'],
			'total' => $_POST['qty']*$_POST['harga']
        	);
        }
        print_r($data);

        $this->Naka->insert_table($data,'daftar_pengeluaran');
        redirect('admin/daftar_pengeluaran');

    }
    public function tambah_pemasukan()
    {
        $data['judul'] = 'Form Tambah Pemasukan';
        $config['upload_path']  = './Aset/bukti';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('bukti_transfer')) {
        	$file = $this->upload->data();
	       	$data = array(
	            'bukti_transfer' => $file['file_name'],
	            'tanggal' => $_POST['tanggal'],
				'nama_pemesan' => $_POST['nama_pemesan'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
	        );
         	    	
        }else{
        	 $data = array(
	     		'tanggal' => $_POST['tanggal'],
				'nama_pemesan' => $_POST['nama_pemesan'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
        	);
        }
        print_r($data);

        $this->Naka->insert_table($data,'daftar_pemasukan');
        redirect('admin/daftar_pemasukan');

    }
    public function edit_daftar_barang($id){
    	$data['judul']='Edit Daftar Barang';
		$this->load->view('Admin/form_head',$data);
		$data['daftar_barang']=$this->Naka->daftar_select('daftar_barang',$id)->result();
		$this->load->view('Admin/form_daftar_barang_u',$data);
		$this->load->view('Admin/form_footer');
    }
    function update_daftar_barang(){
        $barang = array(
            
            'nama_barang' => $_POST['nama_barang'],
            'jenis_bahan' => $_POST['jenis_bahan'],
            'stok_barang' => $_POST['stok_barang'],
            'keterangan' => $_POST['keterangan'],
        );
        $id= $_POST['id'];
        $this->Naka->update_table($barang,'daftar_barang',$id);
        redirect('Admin');
	}
	function hapus_barang($id){
		$this->Naka->delete_table('daftar_barang',$id);
        redirect('Admin');
	}
	function edit_pegawai($id){
		$data['judul']='Edit Daftar Pegawai';
		$this->load->view('Admin/form_head',$data);
		$data['pegawai']=$this->Naka->daftar_select('daftar_pegawai',$id)->result();
		$this->load->view('Admin/form_pegawai_u',$data);
		$this->load->view('Admin/form_footer');
	}
	 function update_pegawai(){
        $data = array(
            
            'nama' => $_POST['nama'],
            'jabatan' => $_POST['jabatan'],
            'alamat' => $_POST['alamat'],
            'masuk' => $_POST['masuk'],
            'status' => $_POST['status'],
        );
        $id= $_POST['id'];
        $this->Naka->update_table($data,'daftar_pegawai',$id);
        redirect('Admin/daftar_pegawai');
	}
	function edit_pemasukan($id){
		$data['judul']='Edit Daftar Pegawai';
		$this->load->view('Admin/form_head',$data);
		$data['pemasukan']=$this->Naka->daftar_select('daftar_pemasukan',$id)->result();
		$this->load->view('Admin/form_daftar_pemasukan_u',$data);
		$this->load->view('Admin/form_footer');
	}
	function update_pemasukan(){
	  $data['judul'] = 'Form Tambah Pemasukan';
        $config['upload_path']  = './Aset/bukti';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('bukti_transfer')) {
        	$file = $this->upload->data();
	       	$data = array(
	            'bukti_transfer' => $file['file_name'],
	            'tanggal' => $_POST['tanggal'],
				'nama_pemesan' => $_POST['nama_pemesan'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
	        );
         	    	
        }else{
        	 $data = array(
	     		'tanggal' => $_POST['tanggal'],
				'nama_pemesan' => $_POST['nama_pemesan'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
        	);
        }
        $id=$_POST['id'];
        $this->Naka->update_table($data,'daftar_pemasukan',$id);
        redirect('admin/daftar_pemasukan');
	}
	function edit_pengeluaran($id){
		$data['judul']='Edit Daftar Pengeluaran';
		$this->load->view('Admin/form_head',$data);
		$data['pengeluaran']=$this->Naka->daftar_select('daftar_pengeluaran',$id)->result();
		$this->load->view('Admin/form_daftar_pengeluaran_u',$data);
		$this->load->view('Admin/form_footer');
	}
	function update_pengeluaran(){
        $config['upload_path']  = './Aset/bukti';
	    $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        $id=$_POST['id'];
        if ($this->upload->do_upload('bukti_struk')) {
        	$file = $this->upload->data();
	       	$data = array(
	            'bukti_struk' => $file['file_name'],
	            'tanggal' => $_POST['tanggal'],
				'jenis_barang' => $_POST['jenis_barang'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
	        );
         	    	
        }else{
        	 $data = array(
	            'tanggal' => $_POST['tanggal'],
				'jenis_barang' => $_POST['jenis_barang'],
				'harga' => $_POST['harga'],
				'qty' => $_POST['qty'],
				'total' => $_POST['qty']*$_POST['harga']
        	);
        }
        $this->Naka->update_table($data,'daftar_pengeluaran',$id);
        redirect('admin/daftar_pengeluaran');
	}
	function edit_pemesanan($id){
			$data['judul']='Edit Daftar Pemesanan';
		$this->load->view('Admin/form_head',$data);
		$data['pemesanan']=$this->Naka->daftar_select('daftar_pesanan',$id)->result();
		$this->load->view('Admin/form_daftar_pemesanan_u',$data);
		$this->load->view('Admin/form_footer');
	}
	function update_pemesanan(){
			$data = array(
            'tanggal' => $_POST['tanggal'],
            'nama_pemesan' => $_POST['nama_pemesan'],
            'jenis_pesanan' =>  $_POST['jenis_pesanan'],
            'qty' =>  $_POST['qty'],
            'harga_satuan' =>  $_POST['harga_satuan'],
            'jumlah' =>  $_POST['qty']*$_POST['harga_satuan'],
            'DP' =>  $_POST['DP'],
            'keterangan' =>  $_POST['keterangan']
        );
			$id = $_POST['id'];
         $this->Naka->update_table($data,'daftar_pesanan',$id);
        redirect('Admin/daftar_pesanan');
	}
	function edit_gaji($id){
			$data['judul']='Edit Gaji Pegawai';
		$this->load->view('Admin/form_head',$data);
		$data['gaji']=$this->Naka->daftar_select('daftar_gaji',$id)->result();
		$data['pegawai']=$this->Naka->daftar('daftar_pegawai')->result();
		$this->load->view('Admin/form_gaji_pegawai_u',$data);
		$this->load->view('Admin/form_footer');
	}
	function update_gaji(){
		$data = array(
            'nik' => $_POST['nik'],
            'gaji' => $_POST['gaji'],
            'tanggal' =>  $_POST['tanggal'],
        );
        $id=$_POST['id'];
         $this->Naka->update_table($data,'gaji_pegawai',$id);
        redirect('Admin/gaji_pegawai');
	}
	function hapus_gaji_pegawai($id){
		$this->Naka->delete_table('gaji_pegawai',$id);
        redirect('Admin/gaji_pegawai');
	}
	function hapus_pemesanan($id){
		$this->Naka->delete_table('daftar_pesanan',$id);
        redirect('Admin/daftar_pesanan');
	}
	function hapus_pemasukan($id){
		$this->Naka->delete_table('daftar_pemasukan',$id);
        redirect('Admin/daftar_pemasukan');
	}
	function hapus_pengeluaran($id){
		$this->Naka->delete_table('daftar_pengeluaran',$id);
        redirect('Admin/daftar_pengeluaran');
	}
	function non_aktifkan_pegawai($id){
		 $data = array(
            'keluar' => date("Y-m-d"),
            'status' => 'Keluar',
        );
        $this->Naka->update_table($data,'daftar_pegawai',$id);
        redirect('Admin/daftar_pegawai');
	}
}
