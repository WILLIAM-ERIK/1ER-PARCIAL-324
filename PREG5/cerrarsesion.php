<?php
    #en verdad se destruye o se tiene la cuenta de quien ingreso antes en algun lado?
	session_start();
	session_destroy();
	header('location: index.php');
?>