<div class="row">   
<div class="col-md-6">
	<?php

	 	if($this->session->flashdata("msg") != ""){
	 		echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
	 	}
	 	?>
	

		<h1>Property Listing</h1>;

		<?php
			echo "<ul>";
			foreach($properties->result() as $row){
				echo "<li>".$row->name." / ".anchor("admin/house/form/$row->pid","Add House").
							" / ".anchor("admin/house/view/$row->pid","View Houses")."</li>";
			}

			echo "</ul>";
	 	?>
	 	
	 </div>

</div>


	




	 	