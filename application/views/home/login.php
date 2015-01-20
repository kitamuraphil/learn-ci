<div>
<h2>Login</h2>
<?php

if($this->session->flashdata("error") != ""){
	echo "<div class='error'>".$this->session->flashdata("error")."</div>";
}


echo form_open("home/login/submit");
echo form_input("email",set_value("email"),"placeholder='Email'");
echo form_password("password","","placeholder='Password'");
echo form_submit("login","Login","class='btn btn-success'");
echo form_close();
?>

</div>