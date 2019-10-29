<?php
session_start();
if (isset($_SESSION['id'])){
echo "Has logeado correctamente, yuju!<br>";
echo "La ID de su usuario es: ". $_SESSION['id'] ." .";
}
else{
echo "No estás logeado";
}
?>

