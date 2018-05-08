<!doctype html>
<html>
<head>
	<title>INSERT-spørringer</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
//Tilkoblingsinformasjon
$tjener = "localhost";
$brukernavn = "root";
$passord = "";
$database = "tegneseriefigurer";

//opprette ny kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

//sjekk om koblingen virker
if ($kobling->connect_error) {
	die("Noe gikk galt: " . $kobling->connect_error);
}

//Angi UTF-8 som tegnsett
$kobling->set_charset("utf8");

if(isset($_POST["leggtil"])) {
	//lagrer skjemafeltene i enklere navn
	$blad_id = $_POST["blad_id"];
	$figurnavn = $_POST["figurnavn"];
	$aarstall = $_POST["aarstall"];
	
	$sql = "INSERT INTO figur (fig_navn, aarstall, blad_id) VALUES ('$figurnavn', '$aarstall', '$blad_id')";
	
	if($kobling->query($sql)) {
		echo "Spørringen $sql ble gjennomført.";
		} else {
			echo "Noe gikk galt med spørringen $sql ($kobling->error).";
		
		}
}
?>

<form method="POST">
	Figurnavn
	<input type="text" name="figurnavn">
	
	Årstall (første opptreden i bladet)
	<input type="number" name="aarstall">
	
	<?php
		//Henter ut bladene fra databasen
		$sql = "SELECT * FROM blad";
		$resultat = $kobling->query($sql);
		//starter select elementet utenfor løkken
		echo "<select name='blad_id'>";
		//Lager et option-element for hver av bladene
		while($rad = $resultat->fetch_assoc()){
			$blad_id = $rad["blad_id"];
			$bladnavn = $rad["bladnavn"];
			
			echo "<option value=$blad_id>$bladnavn</option>";
		}
		//avslutter select-elementet utenfor løkken
		echo "</select>";
		?>
		
		<input type="submit" name="leggtil" value="Legg til">
	</form>
	
</body>
</html>