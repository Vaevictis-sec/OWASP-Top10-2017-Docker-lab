<?php
session_start();
if (isset($_COOKIE['id_sesion'])){
echo "Has logeado correctamente, yuju!<br>";
echo "La ID de su usuario es: ". $_SESSION['id'] ." .";
}
else{
echo "No estás logeado";
}
?>
<div>
<a href="logout.php">Cerrar sesión</a>
</div>
