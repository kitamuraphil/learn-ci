<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Rental MS</title>
  	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
  </head>
  <body>
  	<div class="main">
  		<div class="menu">
  			<ul>
  				<li><?php echo anchor("home","Home"); ?></li>
  			</li>
  			<div class="user-caption">
  				<?php
  					if($this->session->userdata("username") != ""){
  						echo $this->session->userdata("username");
              echo " &bull; ".anchor("home/logout","Logout");
  					}else{
  						echo anchor("home/login","Login");
  					}
  				?>
  			</div>
  		</div>