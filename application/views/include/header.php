<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Rental MS</title>
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" rel="stylesheet">
  	<link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">

  </head>
  <body>
  	<div class="main">
       <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Rental MS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo anchor("home","Home"); ?></li>
            <li><a href="#about">About</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <?php
                if($this->session->userdata("username") != ""){
                  echo $this->session->userdata("username");
                  echo " &bull; ".anchor("home/logout","Logout");
                }else{
                  echo anchor("home/login","Login");
                }
              ?>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>