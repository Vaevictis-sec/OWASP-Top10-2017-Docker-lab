<?php
	session_start();
//	$_SESSION=array();
	session_destroy();
	header("location: index.php");
?>
<div>Cerrando sesión y volviendo al índice</div>
