<?php
session_start();

$servername = "172.30.150.13";
$username   = "root";
$password   = "d0ck3r5ql";
$database   = "things";
// Create connection
$conn       = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$error = ""; //Variable for storing our errors.
function showForm()
{
    echo '<form id="2fa" action="login.php" method="post" accept-charset="UTF-8">
        <fieldset >
        <legend>Segundo factor de autenticación</legend>
        <label for="otp" >OTP*:</label>
        <input type="text" name="otp" id="otp" maxlength="4" />

        <input type="submit" name="Submit" value="Enviar token" />

        </fieldset>
        </form>
        ';
}
$cookie_clean = mysqli_real_escape_string($conn, $_COOKIE['PHPSESSID']);
$time         = time();
$token_uptime = 300;
$old_time     = $time - $token_uptime;


if (!isset($_SESSION['id'])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "No ha rellenado ambos campos.";
    } else {
        // Define $username, $password and token
        $username       = $_POST['username'];
        $pass           = $_POST['password'];
        // To protect from MySQL injection
        $username_clean = mysqli_real_escape_string($conn, $username);
        $pass_clean     = mysqli_real_escape_string($conn, $pass);
        
        //Check username and password from database
        $sql    = "SELECT id,password FROM dump WHERE username='$username_clean' ";
        $result = mysqli_query($conn, $sql);
        $row    = mysqli_fetch_array($result, MYSQLI_ASSOC);
        //If username and password exist in our database then create a session.
        //Otherwise echo error.
        
        if (mysqli_num_rows($result) == 1) {
            if ($row['password'] === $pass_clean) {
                $_SESSION['id'] = $row['id'];
		echo '<script>location=location;</script>';
                
            } else {
                $error = "Incorrect password.";
            }
        } else {
            $error = "Incorrect username.";
        }
    }
} else {
    if (isset($_POST['otp']) && ctype_digit($_POST['otp']) && strlen($_POST['otp']) == 4) {
        $otptoken   = mysqli_real_escape_string($conn, $_POST['otp']);
        $sql_2fa    = "SELECT token,phpsessid,time FROM tokens WHERE phpsessid='$cookie_clean' ";
        $result_2fa = mysqli_query($conn, $sql_2fa);
        while ($row_2fa = mysqli_fetch_array($result_2fa, MYSQLI_ASSOC)) {
            $login_check_session = $row_2fa['phpsessid'];
            $time_difference     = time() - $row_2fa['time'];
            $db_token            = str_pad($row_2fa['token'], 4, '0', STR_PAD_LEFT);
            if ($login_check_session == $cookie_clean && $time_difference < $token_uptime && $otptoken == $db_token) {
                $_SESSION['authenticated'] = "true";
                header('Location: 2fa.php');
                echo 'Token correcto';
            } else {
                //            echo $login_check_session . " igual a " . $cookie_clean ."<br>";
                //            echo $time_difference . " menor que " . $token_uptime ."<br>";
                //          echo $otptoken . " igual que " . $row_2fa ."<br>";
                
                echo 'Token erroneo, pruebe de nuevo';
                showForm();
            }
        }
        
    } else {
        $sql2    = "SELECT phpsessid,time FROM tokens WHERE phpsessid='$cookie_clean' ";
        $result2 = mysqli_query($conn, $sql2);
        $exists  = 0;
        
        while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
            $old_session     = $row2['phpsessid'];
            $time_difference = time() - $row2['time'];
            if ($old_session == $cookie_clean && $time_difference < $token_uptime) {
                $exists++;
            }
            
        }
        if ($exists == 0) {
            $new_token = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $sql3      = "DELETE FROM tokens WHERE time<='$old_time'";
            $sql4      = "INSERT INTO tokens (token,phpsessid,time) VALUES ('$new_token','$cookie_clean','$time')";
            mysqli_query($conn, $sql3);
            mysqli_query($conn, $sql4);
            echo ' Se le ha enviado su token al n  mero de tel  fono asociado a la cuenta, por favor introd  zcalo a continuaci  n';
            showForm();
            
            
            
        } else {
            echo "Ya tiene un token activo, introd  zcalo";
            showForm();
            
            
        }
    }
    
}
echo $error;
?> 
