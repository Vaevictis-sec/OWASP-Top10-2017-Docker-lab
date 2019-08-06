<html>
    <head>
    </head>
    <body>
	<div>
	Incluír el siguiente fichero:<br>
	
	<form action='index.php' method='get'>
	    <input type='text' id='input' name='fichero' placeholder='contenido' />
	    <input type='submit' /><br>
	<?php

	if(isset($_GET["fichero"]) && !empty($_GET["fichero"]))
	{
		$fichero =$_GET['fichero'];
		include($fichero .".php");
	}
	?>
	</form>
	</div>
    </body>
</html>


