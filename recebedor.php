<?php
if(isset($_POST['EMAIL'])) && empty($_POST['EMAIL'])
{
	$email = $_POST['email'];
	echo "O email enviado" eh: ".$email";
}
?>




