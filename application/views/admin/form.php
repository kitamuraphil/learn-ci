<div class="row">   
<div class="col-md-6">
	<?php

	 	if($this->session->flashdata("msg") != ""){
	 		echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
	 	}
	 	?>
	

		<h1>Registration of agent</h1>;

		 <?php
		echo form_open("admin/agent/register","role='form'");

		echo validation_errors();

	 	echo '<div class="form-group">';
	 	echo form_label("First Name","first_name");
	 	echo form_input("first_name",set_value("first_name"),'class="form-control"');
	 	echo '</div>';

		echo '<div class="form-group">';
	 	echo form_label("Last Name","last_name");
	 	echo form_input("last_name",set_value("last_name"),'class="form-control"');
	 	echo '</div>';



	 	echo '<div class="form-group">';
	 	echo form_label("Phone Number","phone_number");
	 	echo form_input("phone_number",set_value("phone_number"),'class="form-control"');
	 	echo '</div>';


	 	echo '<div class="form-group">';
		echo form_label("Email","email");
	 	echo form_input("email",set_value("email"),'class="form-control"');
	 	echo '</div>';


	 	echo '<div class="form-group">';
	 	echo form_label("Password ","password");
	 	echo form_password("password",set_value("password"),'class="form-control"');
	 	echo '</div>';


	 	echo '<div class="form-group">';
	 	echo form_label("Confirm Password","confirm_password");
	 	echo form_password("confirm_password",set_value("confirm_password"),'class="form-control"');
	 	echo '</div>';


	 	echo form_submit("submit","Add agent","class='btn btn-lg btn-success'");

	 	?>
	 	
	 </div>

</div>


	




	 	