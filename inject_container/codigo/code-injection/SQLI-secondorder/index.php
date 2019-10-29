<h2>A&ntilde;adir usuarios</h2>
<form action="" method="get">
Nombre:<br><input type="text" name="nombre"><br>
Password:<br><input type="text" name="password"><br><br>
<input type="submit" value="Enviar">
</form>
<?php
if(isset($_GET['nombre'])){
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
$name = $_GET['nombre']; 
$password = $_GET['password'];
        $raw_results = mysqli_query($conn, "INSERT INTO  users (name, password, mail)
            VALUES ('".(string)mysqli_real_escape_string($conn,$name)."','".md5($password)."','test@test.org')");
        if($raw_results === FALSE) { 
            echo "La consulta ha fallado." . mysqli_error($conn);
            die();
        }
#if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
#	while($results = mysqli_fetch_array($raw_results)){
#		echo "<p><h3>".$results['name']."<br>".$results['mail']."</h3></p>";
#		}
#	}
#else{ // if there is no matching rows do following
#   echo "No hay resultados";
#}
}
?>
<br><br>
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<label for='username' >Nombre*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Logear' />

</fieldset>
</form>
