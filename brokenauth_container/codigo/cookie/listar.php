<?php
session_start();
print_r(scandir('/tmp'));
print_r(session_id());
phpinfo();
?>
