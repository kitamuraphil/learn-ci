<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __constructor(){
		parent::__constructor();
	}

	public function index()
	{
		// $this->load->view('home/index');
		$data['main'] = "home/index";
		$this->load->view("include/template",$data);
	}

	public function login($mode="form"){
		if($mode=="form"){
			$data['main'] = "home/login";
			$this->load->view("include/template",$data);
		}

		if($mode=="submit"){
			//process the form
			$this->load->model("admin_model");
			if($this->admin_model->validate_admin()){
				//login
				$email = $this->input->post("email");
				$admin = $this->admin_model->get_admin($email);
				//put details in session
				$admin_data = array(
					"username" => $admin->username,
					"email" => $admin->email
					);
				$this->session->set_userdata($admin_data);
				redirect("admin");
			}else{
				//return to form
				$this->session->set_flashdata("error","Wrong email and password");
				redirect("home/login");
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("home");
	}
}
