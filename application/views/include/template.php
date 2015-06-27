<?php 

$this->load->view("include/header"); 

echo '<div class="container content none" id="none">';

$this->load->view($main);

//$this->load->view("home/form.php");

echo "</div>";

$this->load->view("include/footer"); 

