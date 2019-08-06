<h2>Comprobar datos por ID (1-100)</h2>
<form action="" method="get">
<input type="text" name="query"><br>
<input type="submit" value="Enviar">
</form>
<?php
if(isset($_GET['query'])){
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
$query = $_GET['query']; 

        $raw_results = mysqli_query($conn, "SELECT * FROM users
            WHERE (`id` LIKE '$query')");
	echo "La query utilizada ha sido: <br> SELECT * FROM users WHERE (`id` LIKE '$query') <br>";

        if($raw_results === FALSE) { 
            echo "La consulta ha fallado." . mysqli_error($conn);
            die();
        }
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
	while($results = mysqli_fetch_array($raw_results)){
		echo "<p><h3>".$results['name']."<br>".$results['mail']."</h3></p>";
		}
	}
else{ // if there is no matching rows do following
   echo "No hay resultados";
}
}
?>
