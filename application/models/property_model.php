<?php

class Property_model extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function add_property(){
		$property = array(
			"name" => $this->input->post("name"),
			"location" => $this->input->post("location"),
			"number_of_floors"=>$this->input->post("number_of_floors"),
			"number_of_houses" => $this->input->post("number_of_houses")
		);

		return $this->db->insert("property",$property);
	}

	function get_properties(){
		return $this->db->get("property");
	}

	function get_property($pid){
		$this->db->where("pid",$pid);
		return $this->db->get("property");
	}
	
}