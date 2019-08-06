<html>
<head>
</head>
<body>
<form method="POST" action="index.php">
<legend>Comprobador de conectividad:</legend>
        <input type="text" name="ip" placeholder="127.0.0.1">
        <input type="submit">
</form>
<pre>
<?php 
if(isset($_POST["ip"]) && !empty($_POST["ip"])){
        $response = shell_exec("timeout 5 bash -c 'ping -c 3 ".$_POST["ip"]."'");
        echo $response;
}
?>
</pre>
<form method="POST" action="index.php">
<legend>Comprobador de conectividad con filtros:</legend>
        <input type="text" name="ip_filtro" placeholder="127.0.0.1">
        <input type="submit">
</form>
<pre>
<?php
if(isset($_POST["ip_filtro"]) && !empty($_POST["ip_filtro"])){
        $ip = @preg_replace("/[\\\$|`;&<>]/", "", $_POST["ip_filtro"]);
        $response = @shell_exec("timeout 5 bash -c 'ping -c 3 ".$ip."'");
        $receive = @preg_match("/3 packets transmitted, (.*) received/s",$response,$out);

        if ($out[1]=="3") 
        {
                echo "Ping OK";
        }
        elseif ($out[1]=="0")
        {
                echo "Ping NOK";
        }
        else
        {
                echo "Syntax Error";
        }
}
?>
</pre>
</body>
</html>
