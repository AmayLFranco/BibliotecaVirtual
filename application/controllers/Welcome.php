<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		
       
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function inicio()
	{	
		$this->load->view('view_header');
		$this->load->view('view_body');

	}
}
