<?php
session_start();
?>
<html>
    <head>
    </head>
    <body>
	<div>
	Hola, su idioma es:<br>

	</div>
    </body>
</html>



<?php
$language= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language_clean= substr($language, 0, strpos($language, ','));
echo "Como viene en el header \"Accept-Language\":<br>
 $language <br><br>";
echo "Como parseamos lo de antes de la coma:<br>
 $language_clean <br><br>";
echo "Fichero que vamos a cargar:<br>
./languages/". $language_clean ."<br><br>";

echo "Contenido del fichero que cargamos:<br>";
include './languages/'. $language_clean;
?>
