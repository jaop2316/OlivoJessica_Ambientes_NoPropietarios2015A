<?php

session_start();
if($_SESSION['email']){
	session_destroy();
	header('Location: /examen2/index.php');
}
else{

	header('Location: /examen2/index.php');
}




