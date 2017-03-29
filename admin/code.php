<?php
	session_start();
	include "Vcode.class.php";

	$code=new Vcode(80, 20, 4);

	$code->showImage();  

	$_SESSION["code"]=$code->getCheckCode();  

?>