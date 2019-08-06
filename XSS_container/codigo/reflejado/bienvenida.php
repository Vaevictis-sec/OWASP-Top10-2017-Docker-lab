<html>
<body>
<?php
$name = $_GET['name'];
echo "Bienvenido/a $name<br>";
echo '<a href="https://www.google.com">Ir a Google</a><br><br>';

$cookie_name = "user";
$cookie_value = 'tokensupersecreto'.rand();
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

if(!isset($_COOKIE[$cookie_name])) {
    echo "La cookie: '" . $cookie_name . "' no ha sido creada aún!<br>";
} else {
    echo "La cookie '" . $cookie_name . "' existe.<br>";
    echo "Su valor es: " . $_COOKIE[$cookie_name];
}
?>


<form>
  First name:<br>
  <input type="text" name="name"><br>
  Last name:<br>
  <input type="text" name="lastname"><br>
  <input type="submit">
</form>
