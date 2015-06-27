<div class="row">   
<div class="col-md-6">
	<?php

	 	if($this->session->flashdata("msg") != ""){
	 		echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
	 	}
	 	?>
	

		<h1>Add Property</h1>;

		 <?php
		echo form_open("admin/property/add","role='form'");



		echo validation_errors();

	 	echo '<div class="form-group">';
	 	echo form_label("Property Name","name");
	 	echo form_input("name",set_value("name"),'class="form-control"');
	 	echo '</div>';

		echo '<div class="form-group">';
	 	echo form_label("Property Location","location");
	 	echo form_input("location",set_value("location"),'class="form-control"');
	 	echo '</div>';

	 	echo '<div class="form-group">';
	 	echo form_label(" Number of Houses","number_of_houses");
	 	echo form_dropdown("number_of_houses",range(0,30),set_value("number_of_houses"),'class="form-control"');
	 	echo '</div>';


	 	echo '<div class="form-group">';
	 	echo form_label(" Number of Floors","number_of_floors");
	 	echo form_dropdown("number_of_floors",range(0,6),set_value("number_of_floors"),'class="form-control"');
	 	echo '</div>';

	 	echo form_submit("submit","Add Property","class='btn btn-lg btn-success'");

	 	?>
	 	
	 </div>

</div>


	




	 	