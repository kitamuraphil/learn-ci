<?php

class Forms_model extends CI_Model{


	function __construct(){
		parent::__construct();
	}

	function register_agent(){
		$agent = array(
		"first_name" => $this->input->post("first_name"),
		"last_name" => $this->input->post("last_name"),
		"phone_number"=>$this->input->post("phone_number"),
		"email" => $this->input->post("email"),
		"password" => md5($this->input->post("password"))
		);

		$this->db->insert("agent",$agent);
	}

	function get_agent($arg){
		if($arg > 0){
			$this->db->where("gid",$arg);
		}else{
			//arg is email
			$this->db->where("email",$arg);
		}

		$result = $this->db->get("agent");
		if($result->num_rows() > 0){
			//found match
			$result = $result->result_array();
			return $result[0];
		}else{
			return FALSE;
		}
	}

	
}