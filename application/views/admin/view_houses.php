<div class="row">   
<div class="col-md-6">
	<?php

	 	if($this->session->flashdata("msg") != ""){
	 		echo "<div class='alert alert-success'>".$this->session->flashdata("msg")."</div>";
	 	}
	 	?>
	

		<h1>House Listing</h1>;

		<?php
			echo "<ul>";
			foreach($house->result() as $row){
				echo "<li>".$row->house. "</li>";
							
			}

			echo "</ul>";
	 	?>

		
	 	
	 </div>

</div>


	




	 	
	