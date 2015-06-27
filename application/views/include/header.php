<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>RentMS</title>
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
          <a class="navbar-brand" href="#">RentMS</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo anchor("home","Home"); ?></li>
            <li><?php echo anchor("home/about","About"); ?></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <?php
                if($this->session->userdata("username") != ""){
                  echo $this->session->userdata("username");
                }else{
                  echo "Guest";
                }
              ?>
               <span class="caret"></span>
              <ul class="dropdown-menu">
                <?php if($this->session->userdata("is_logged_in")){?>

                      <li><?php echo anchor("admin/agent","Agents"); ?></li>
                      <li><?php echo anchor("admin/property","View Properties"); ?></li>
                      <li><?php echo anchor("admin/property/form","Add Property"); ?></li>
                      <li><?php echo anchor("home/logout","Logout"); ?></li>


                <?php }else{ ?>

                <li><?php echo anchor("home/login","Login"); ?></li>

                <?php } ?>
                
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>