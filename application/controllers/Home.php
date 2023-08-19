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
        if (strcmp($username, 'admin')==0 and strcmp($password, 'admin')==0) {
        	 $datasession = array(
                'id' => 1,
                'username' => 'admin',
                'admin' => 'Admin Ipan'
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
