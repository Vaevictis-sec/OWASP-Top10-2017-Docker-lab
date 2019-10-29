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
if(empty($_POST["login"]))
{
$error = "No ha rellenado ambos campos.";
}else
{
$login= @json_decode($_POST['login'], true);
$username=$login['data']['username'];

// To protect from MySQL injection
$username_clean = mysqli_real_escape_string($conn, $username);


//Check username and password from database
#print ("VARIABLES ENVIADAS:");
#var_dump($username_clean);
#var_dump($login['data']['password']);
$sql="SELECT name, password FROM users WHERE name='$username_clean'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
#var_dump($row);
//If username and password exist in our database then create a session.
//Otherwise echo error.
#print("valores de DB");
#var_dump($row["name"]);
#var_dump($row["password"]);
echo "Nombre enviado: " .$login['data']['username'];
echo "<br>Nombre de base de datos: " .$row["name"];
echo "<br>SHA1 de password enviada: " .hash("sha1", $login['data']['password']);
echo "<br>SHA1 de password en base de datos: ".hash("sha1", $row["password"]) ."<br>";

if($login['data']['username'] == $row["name"]  && hash("sha1", $login['data']['password'])==hash("sha1",$row["password"]))
{
print ("LOGEADO CON EXITO");
$_SESSION['logeado'] = "True"; // Initializing Session
#header("location: user.php"); // Redirecting To Other Page
}else
{
$error = "Incorrect username or password.";
}

}

