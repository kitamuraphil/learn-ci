<div class="row">   
<div class="col-md-6">
	<?php

	 	if($this->session->flashdata("msg") != ""){
	 		echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
	 	}
	 	?>
	

		<h3><?php echo $property[0]->name; ?> &#187; Add house</h3>;

		 <?php
		echo form_open("admin/house/add/$pid","role='form'");

		echo validation_errors();

		echo form_hidden("pid",$pid);

		$house_types = array(
			"Single" => "Single",
			"1 Bedroom" => "1 Bedroom",
			"2 Bedroom" => "2 Bedroom",
			"3 Bedroom" => "3 Bedroom"
			);
		$condition = array(
			"Good" => "Good",
			"Well furnished" => "Well furnished",
			"Good finishing" => "Good finishing",
			"Spacious" => "Spacious"
			);
		
		echo '<div class="form-group">';
	 	echo form_label("House Number","house_number");
	 	echo form_input("house_number",set_value("house_number"),'class="form-control"');
	 	echo '</div>';



	 	echo '<div class="form-group">';
	 	echo form_label("Floor Number","floor_number");
	 	echo form_dropdown("floor_number",range(0,$property[0]->number_of_floors),set_value("floor_number"),'class="form-control"');
	 	echo '</div>';

	 	echo '<div class="form-group">';
		echo form_label("House Type","house_type");
	 	echo form_dropdown("house_type",$house_types,set_value("house_type"),'class="form-control"');
	 	echo '</div>';


	 	echo '<div class="form-group">';
	 	echo form_label("Condition","condition");
	 	echo form_dropdown("condition",$condition,set_value("condition"),'class="form-control"');
	 	echo '</div>';

	 	echo form_submit("submit","Add house","class='btn btn-lg btn-success'");

	 	?>
	 	
	 </div>

</div>


	




	 	