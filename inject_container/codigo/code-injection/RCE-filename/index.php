<?php
  if(!empty($_FILES['fichero']))
  {
    $path = "uploads/";
    $path = $path . basename( $_FILES['fichero']['name']);
    if(move_uploaded_file($_FILES['fichero']['tmp_name'], $path)) {
      echo "The file ".  basename( $_FILES['fichero']['name']). 
      " has been uploaded";
    } else{
        echo "There was an error uploading the file, please try again!";
    }
  }

?>
<html>
   <body>
      SUBIR FICHERO:
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="fichero" />
         <input type="submit"/>
      </form>
      
      <form action="" method="POST">
         <input type="submit" value="Listar ficheros en /uploads" name="listar"/>
      </form>
      <form action="" method="POST">
         <input type="submit" value="Borrar ficheros en /uploads" name="borrar"/>
      </form>
      <form action="" method="POST">
         <input type="submit" value="Listar ficheros en /destino" name="listar_destino"/>
      </form>
      <form action="" method="POST">
         <input type="submit" value="Ejecutar scp * www-data@localhost:/var/www/html/RCE-filename/destino/" name="scp"/>
      </form>
      <form action="" method="POST">
         <input type="submit" value="Ejecutar tar -czf ./destino/final.tar.gz *.php" name="tar"/>
      </form>
      <form action="" method="POST">
         <input type="submit" value="Ejecutar rsync * www-data@localhost:/var/www/html/RCE-filename/destino/" name="rsync"/>
      </form>
	<?php
	  if(isset($_POST['listar'])){ listar();}
	  if(isset($_POST['borrar'])){ borrar();}
	  if(isset($_POST['listar_destino'])){ listar_destino();}
	  if(isset($_POST['scp'])){ scp();}
	  if(isset($_POST['tar'])){ tar();}
	  if(isset($_POST['rsync'])){ rsync();}
	  function listar()
	  {
	      print `ls -a -- uploads/`;
	  }
	  function borrar()
	  {
	      print `rm -f -- uploads/*`;
	      print 'Archivos borrados';

	  }
	  function listar_destino()
	  {
	      print `ls -a -- destino/`;
	  }

	  function scp()
	  {
	      chdir('uploads');
	      print `rm -rf -- ../destino/* && scp * www-data@localhost:/var/www/html/RCE-filename/destino/`;

	  }
          function tar()
	  {
	      chdir('uploads');
	      print `rm -rf -- ../destino/* && tar -czf ../destino/final.tar.gz *.php `;

	  }
          function rsync()
	  {
	      chdir('uploads');
	      print `rm -rf -- ../destino/* && rsync * www-data@localhost:/var/www/html/RCE-filename/destino/ `;

	  }	
	

	?>


   </body>
</html>
