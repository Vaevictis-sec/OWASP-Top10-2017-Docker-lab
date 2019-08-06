<?php
session_start();
$servername = "172.17.0.5";
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
$password=$_POST['password'];

// To protect from MySQL injection
$username_clean = mysqli_real_escape_string($conn, $username);
$password = md5($password);

//Check username and password from database
$sql="SELECT id FROM users WHERE name='$username_clean' and password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then create a session.
//Otherwise echo error.

if(mysqli_num_rows($result) >= 1)
{
$_SESSION['id'] = $row['id']; // Initializing Session
header("location: user.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}

}


?>
