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

}
