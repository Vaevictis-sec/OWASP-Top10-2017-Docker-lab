<?php
session_start();
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

$error = ""; //Variable for storing our errors.
if(empty($_POST["username"]) || empty($_POST["password"]))
{
	$error = "No ha rellenado ambos campos.";
}else
{
	// Define $username and $password
	$username=$_POST['username'];
	$pass=$_POST['password'];

	// To protect from MySQL injection
	$username_clean = mysqli_real_escape_string($conn, $username);
	$pass_clean = mysqli_real_escape_string($conn, $pass);

	//Check username and password from database
	$sql="SELECT id,username,password FROM dump WHERE username='$username_clean' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	//If username and password exist in our database then create a session.
	//Otherwise echo error.

	if(mysqli_num_rows($result) == 1)
	{
		if($row['password'] === $pass_clean){
			$_SESSION['id'] = $row['id'];
			$userid=$row['id'];
			$sql_insert= "DELETE FROM cookie_session_serial WHERE id='$userid'; INSERT INTO cookie_session_serial (serial_session,id) VALUES (NULL,'$userid'); SELECT serial_session FROM cookie_session_serial WHERE id='$userid';";
			if(mysqli_multi_query($conn, $sql_insert)){
				do{
					if(!mysqli_more_results($conn)){
						$result_insert=mysqli_store_result($conn);
						$row_insert=mysqli_fetch_array($result_insert,MYSQLI_ASSOC);
						setcookie("session_serial",$row_insert['serial_session']);
						header("Location: user.php");
					}
				}while(mysqli_next_result($conn));
			}
		}
		else{ $error = "Incorrect password.";}
	}else
	{
	$error = "Incorrect username.";

	}

}

echo $error;
?>
