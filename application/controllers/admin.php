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

	public function house_view(){
		$this->load->model("house_model");
		$data['houses']=$this->house_model->get_houses();
		$data["main"]="admin/houses";
		$this->load->view("include/template",$data);
	}

	public function agent($mode="form"){
		if($mode=="form"){
			$data["main"] = "admin/form";
			$this->load->view("include/template",$data);
		}

		if($mode=="register"){
			$rules = array(
				array(
					'field' => 'first_name',
					'label' => 'First Name',
					'rules' => 'required'
					),
				array(
					'field' => 'last_name',
					'label' => 'First Name',
					'rules' => 'required'
					),
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' =>  'required|valid_email|is_unique[agent.email]'
					),
					array( 
					'field' => 'password',
					'label' =>  'password',
					'rules' =>  'required'
					));

			$this->form_validation->set_rules($rules);
		
			if($this->form_validation->run()){
			
				$this->load->model("forms_model");
				$this->forms_model->register_agent();

				$this->session->set_flashdata("msg","Addition Successful");
			
				redirect("admin");
			}else{
				$this->agent("form");
			}
		}

		}


	public function is_logged_in(){
		if(!$this->session->userdata("is_logged_in")){
			redirect("home");
		}

	}

	public function property($mode="view"){
		$this->load->model("property_model");

		if($mode=="view"){
			//give list of properties
			$data["main"] = "admin/property_view";
			$data["properties"] = $this->property_model->get_properties();
			$this->load->view("include/template",$data);
		}

		if($mode=="form"){
			$data["main"] = "admin/property_form";
			$this->load->view("include/template",$data);
		}

		if($mode=="add"){
			$rules = array(
					array(
						'field' => 'name',
						'label' => 'Name',
						'rules' => 'required'
					),
					array(
						'field' => 'location',
						'label' => 'Location',
						'rules' => 'required'
					),
					array(
						'field' => 'number_of_floors',
						'label' => 'Number of floors',
						'rules' =>  'required|greater_than[0]'
					),
					array( 
						'field' => 'number_of_houses',
						'label' =>  'Number of Houses',
						'rules' =>  'required|greater_than[20]'
					)
				);

			$this->form_validation->set_rules($rules);
		
			if($this->form_validation->run()){
				$this->property_model->add_property();

				$this->session->set_flashdata("msg","Added Successfully");
			
				redirect("admin/property");
			}
			else{
				$this->property("form");
			}

		}	

	}
	

	public function house($mode="form",$id=0){
		if($mode=="form"){
			$data["main"] = "admin/houses";
			$this->load->model("property_model");
			$data["property"] = $this->property_model->get_property($id)->result();
			// var_dump($data["property"]->result()); die();
			$data["pid"] = $id;
			$this->load->view("include/template",$data);
		}

		if ($mode=="view"){
			$this->load->model("house_model");
			$data['houses']=$this->house_model->get_houses($id);
			$data["main"]="admin/view_houses";
			$this->load->view("include/template",$data);
		}

		if($mode=="add"){
			$rules = array(
				
				array(
					'field' => 'house_number',
					'label' => 'House Number',
					'rules' => 'required'
					),
				array(
					'field' => 'floor_number',
					'label' => 'floor Number',
					'rules' =>  'required'
					),
					array( 
					'field' => 'house_type',
					'label' =>  'House Type',
					'rules' =>  'required'
					),
					array(
					'field' => 'condition',
					'label' =>  'Condition',
					'rules' => 'required'
					));

			$this->form_validation->set_rules($rules);
		
			if($this->form_validation->run()){
			
				$this->load->model("house_model");
				$this->house_model->add_house();

				$this->session->set_flashdata("msg","Addition Successful");
			
				redirect("admin/house/form/$id");
			}
			else{
				$this->house("form",$id);
			}

		}	

	}


}




	
	