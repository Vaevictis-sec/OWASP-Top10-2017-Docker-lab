<?php
session_start();
echo "Logeado con id: ". $_SESSION['id']. "<br><br>";

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

        $raw_results = mysqli_query($conn, "SELECT name FROM users
            WHERE (`id` LIKE '".$_SESSION['id']."')");
        if($raw_results === FALSE) { 
            echo "La consulta ha fallado." . mysqli_error($conn);
            die();
        }
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
	$results = mysqli_fetch_array($raw_results);
	echo "Los datos del usuario ".$results['name']." son :<br>";
	$raw_results_name = mysqli_query($conn, "SELECT * FROM users
            WHERE (`name` LIKE '".$results['name']."')");	
	while($results_name=mysqli_fetch_array($raw_results_name)){
                echo "<p><h3>".$results_name['id']."<br>".$results_name['name']."<br>".$results_name['mail']."<br>".$results_name['password']."</h3></p>";
                }

	}
else{ // if there is no matching rows do following
   echo "No hay resultados";
}
