<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->view('header');
		$this->load->view('Login');
	}
	public function Login()
	{
		$this->load->view('header');
		$this->load->view('Login');
	}
	public function register()
	{
		$this->load->view('header');
		$this->load->view('Register');
	}
	function tambah_admin(){
        $data = array(
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'password' => md5($_POST['password']),
        );
        print_r($data);
        $this->Naka->insert_table($data,'admin');
        redirect('Home');
	}
	public function Author()
	{
		$this->load->view('header');
		$this->load->view('Author');
	}
	public function About()
	{
		$this->load->view('header');
		$this->load->view('About');
	}
	public function logging(){
		  $username = $this->input->post('username');
        $password = $this->input->post('password');
       $data = $this->Naka->check_admin($username, $password)->row(); 
        if ($data) {
        	 $datasession = array(
                'id' => $data->id,
                'username' => $data->username,
                'admin' => $data->email
            );

            $this->session->set_userdata($datasession);
            redirect(site_url('Admin'));
        }else {
            $msg = array('msg' => 'Username/password tidak ditemukan');
            $this->session->set_userdata($msg);
            redirect(site_url('home/login'));
        }
	}
	public function logout(){
		$this->session->sess_destroy();
        redirect(base_url());
	}
}
