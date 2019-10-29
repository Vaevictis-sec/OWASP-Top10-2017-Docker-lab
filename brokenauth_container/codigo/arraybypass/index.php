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
            VALUES ('".(string)mysqli_real_escape_string($conn,$name)."','".hash("sha1",$password)."','test@test.org')");
        if($raw_results === FALSE) { 
            echo "La consulta ha fallado." . mysqli_error($conn);
            die();
        }
}
?>
<br><br>
<form class='login' action='login.php' method='post' accept-charset='UTF-8'>
<fieldset >
<legend>Login</legend>
<label for='username' >Nombre*:</label>
<input type='text' name='username' id='username'  maxlength="50" />

<label for='password' >Password*:</label>
<input type='password' name='password' id='password' maxlength="50" />

<input type='submit' name='Submit' value='Logear' />
&nbsp;
</fieldset>
</form>


<script src="jquery-2.2.1.min.js" type="text/javascript"></script>
<script src="sha1.js" type="text/javascript"></script>
<!-- <script src="sha256.js" type="text/javascript"></script> -->
<script type="text/javascript">
        $("document").ready(function(){
            $(".login").submit(function(){
                $(".return-value").html("&nbsp;");

//                var hashobj = new jsSHA("SHA-256", "TEXT");
//                hashobj.update($('#password').val());
//                var hashpass = hashobj.getHash("HEX");
		  var hash = sha1.create();
		  hash.update($('#password').val());
		  var hashpass = hash.hex();
                  var data = {username: $('#username').val(), password: hashpass};

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "login.php",
                    data: {login : JSON.stringify({data})},
                    success: function(data) {
                        $(".return-value").html(
                            "Result: " + data['status']
                        );
                    }
                });
                return false;
            });
        });

        </script>
