<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		// $this->load->view('welcome_message');
		$data['main'] = "admin/index";
		$data['name'] = "Kitamura";
		$data['age'] = "22";
		$this->load->view("include/template",$data);
	}
}