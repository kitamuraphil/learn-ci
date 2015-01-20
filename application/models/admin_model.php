<?php

class Admin_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function validate_admin(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$password = md5($password);

		$this->db->where(
			array(
				"email"=>$email,
				"password"=>$password
				)
			);
		$result = $this->db->get("admin");

		if($result->num_rows > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	function get_admin($email){
		$this->db->where("email",$email);
		$result = $this->db->get("admin");

		if($result->num_rows > 0){
			$result = $result->result();
			return $result[0];
		}else{
			return FALSE;
		}
	}
}