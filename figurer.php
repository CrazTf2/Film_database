<?php 
$figurer = array("Langbein", "Asterix", "Skrue McDuck");

echo "<h3>Noen  tengeseriefigurer</h3>";
for($i=0; $i < count($figurer); $i++) {
	echo "figur med indeks $i: $figurer[$i] <br>";

}

echo '<h3>Arrayen $figurer </h3>';
var_dump($figurer);
echo $figurer[2];

?>