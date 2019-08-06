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
