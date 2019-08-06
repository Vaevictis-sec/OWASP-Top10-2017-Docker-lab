<!DOCTYPE html>
<html>
<body>
<h2>Normal</h2>
<form action="./receptor.php" id="form-xml" method="post">
  Introduzca el texto XML:<br>
  <textarea name="xml" form="form-xml"></textarea>
  <input type="submit" value="Submit">
</form> 
<div>
Texto de ejemplo: &#x3C;xml&#x3E;&#x3C;cosas&#x3E;buenosdias&#x3C;/cosas&#x3E;&#x3C;/xml&#x3E;
</div>

<h2>Blind</h2>
<form action="./receptor_blind.php" id="form-xml-blind" method="post">
  Introduzca el texto XML:<br>
  <textarea name="xml_blind" form="form-xml-blind"></textarea>
  <input type="submit" value="Submit">
</form> 
<div>
Texto de ejemplo: &#x3C;xml&#x3E;&#x3C;cosas&#x3E;buenosdias&#x3C;/cosas&#x3E;&#x3C;/xml&#x3E;
</div>

</body>
</html>
