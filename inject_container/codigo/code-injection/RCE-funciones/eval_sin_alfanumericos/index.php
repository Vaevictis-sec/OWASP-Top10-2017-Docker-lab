<html>
<head>
</head>
<body>
 
<h4> Eval sin contexto lógico</h4>
 
<form action='index.php' method='post'>
    <input type='text' id='input' name='input' />
    <input type='submit' />
<?php
 
if (isset($_POST['input'])) {
    if(!preg_match('/[a-zA-Z0-9`]/', $_POST['input'])){
        print '<fieldset><legend>Resultado</legend>';
        eval('print '.$_POST['input'].";");
        print '</fieldset>';
    }
    else
        echo "<p>Alerta Alerta Alerta</p>";
}
?>
</form>
</body>
</html>
