<?php

class House_model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	function add_house(){
		$houses = array(
		
		"house_number" =>$this->input->post("house_number"),
		"floor_number" =>$this->input->post("floor_number"),
		"house_type"   => $this->input->post("house_type"),
		"condition"    => $this->input->post("condition"),
		"pid" => $this->input->post("pid")
		);

		$this->db->insert("houses",$houses);
	}

	function get_houses($id){
		$this->db->where("pid",$id);
		return $this->db->get('houses'); 
	}

	
}