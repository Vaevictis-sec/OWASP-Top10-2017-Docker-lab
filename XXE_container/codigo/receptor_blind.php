<?php
error_reporting(0);
if(isset($_POST["xml_blind"]) && !empty($_POST["xml_blind"])){
	$xmlfile = $_POST["xml_blind"];
	$dom = new DOMDocument();
	$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD | LIBXML_NOWARNING | LIBXML_NOERROR);
	$xml = simplexml_import_dom($dom);
	$cosas = $xml->cosas;
	if(isset($cosas) && !empty($cosas)){
		echo "Se ha recibido el XML correctamente";
	}
	else{
	echo "El XML parece estar malformado";
	}
}
else{ echo "No se ha recibido nada";}
?>

