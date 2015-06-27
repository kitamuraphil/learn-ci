<?php

Class Data_model extends Model{

	function __construct(){
		parent:: construct();
	}

	function get_houses(){
		return $this->db->get('houses'); 
	   
	}
} 

















?>