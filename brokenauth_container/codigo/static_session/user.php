<?php
session_start();
if (isset($_COOKIE['session'])){
	$servername = "172.30.150.13";
	$username = "root";
	$password = "d0ck3r5ql";
	$database = "things";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	$galleta=$_COOKIE['session'];
	$sql="SELECT static_session FROM cookie_session_static WHERE static_session='$galleta'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	//If username and password exist in our database then create a session.
	//Otherwise echo error.

	if(mysqli_num_rows($result) == 1)
	{
		echo "Ha logeado como el usuario con ID  ". $_SESSION['id'] ." .<br>";
		echo "Información sensible del usuario<br>";
		echo '<a href="logout.php">Cerrar sesión</a>';
	}
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
