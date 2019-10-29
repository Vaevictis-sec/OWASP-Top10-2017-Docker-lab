<?php
session_start();
if (isset($_SESSION['id']) && $_SESSION['authenticated']=="true"){
	echo "Ha logeado como el usuario con ID  ". $_SESSION['id'] ." .";
}
?>
<!--
<style>
input[type=number]::webkit-inner-spin-button,input[type=number]::webkit-outer-spin-button{
-webkit-appearance:none;
-moz-appearance:none;
appearance: none;
margin:0;
}
</style>
-->
