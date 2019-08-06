<?php
if(isset($_POST["xml"]) && !empty($_POST["xml"])){
	$xmlfile = $_POST["xml"];
	$dom = new DOMDocument();
	$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
	$xml = simplexml_import_dom($dom);
	$cosas = $xml->cosas;
	if(isset($cosas) && !empty($cosas)){
		echo nl2br("Se ha recibido el XML correctamente\n\nContenido:\n\n");
	}
	else{
	echo "El XML parece estar malformado";
	}
	$str = " $cosas \n";

	echo $str;
}
else{ echo "No se ha recibido nada";}
?>
