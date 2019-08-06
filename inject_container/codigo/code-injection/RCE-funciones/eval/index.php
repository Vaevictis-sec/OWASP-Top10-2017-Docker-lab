<html>
<head>
</head>
<body>
 
<h4>Eval en plano</h4>
 
<form action='index.php' method='post'>
    <input type='text' id='input' name='input' />
    <input type='submit' />
<?php
 
if (isset($_POST['input'])) {
    eval('print '.$_POST['input'].";");
    }
?>
</form>
</body>
</html>
