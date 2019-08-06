<?php

if ($handle = opendir('/var/www/html')) {
    echo "P&aacute;ginas disponibles:<br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry <br>";
    }

    closedir($handle);
}
?>
root@e97e612d2488:/var/www/html/RCE-funciones# nano index.php 
root@e97e612d2488:/var/www/html/RCE-funciones# cat index.php 
<?php

if ($handle = opendir('/var/www/html/RCE-funciones/')) {
    echo "P&aacute;ginas disponibles:<br>";

    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry <br>";
    }

    closedir($handle);
}
?>
