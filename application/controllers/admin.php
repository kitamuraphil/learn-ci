<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['main'] = "admin/index";
		$this->load->view("include/template",$data);
	}

	public function is_logged_in(){
		if(!$this->session->userdata("is_logged_in")){
			redirect("home");
		}
	}
}