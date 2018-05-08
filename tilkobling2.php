<html>
<?php
// Tilkoblingsinformasjon
$host = "localhost";
$user = "root";
$passord = "";
$database = "tegneseriefigurer";

// Opprette ny kobling
$kobling = new mysqli($host, $user, $passord, $database);

// Sjekk om koblingen virker
if ($kobling->connect_error) {
	die("Noe gikk galt: " . $kobling->connect_error);
} else {
	echo "Koblingen virker. ";
}

// Angi UTF-8 som tegnsett
$kobling->set_charset("utf8");
$sql = "SELECT * FROM blad";
$resultat = $kobling->query($sql);

echo "Koden $sql ga $resultat->num_rows rader.";

echo "<table>"; //starter tabellen
echo "<tr>";
	echo "<th>blad_id</th>";
	echo "<th>bladnavn</th>";
echo "</tr>";
	
while ($rad = $resultat->fetch_assoc()) {
	$blad_id = $rad["blad_id"];
	$bladnavn = $rad["bladnavn"];
	
	echo "<tr>";
		echo "<td>$blad_id</td>";
		echo "<td><a href='figurer.php?blad_id=$blad_id'>
		$bladnavn</a></td>";
	echo "</tr>";
}
echo "</table>";//avslutter tabellen
?>