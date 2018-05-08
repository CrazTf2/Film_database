<!doctype html>
<html>
<head>
  <title>MAK-Movie</title>
  <meta charset="UTF-8">
</head>
<body>
<?php
if(isset($_POST["leggtil"])){
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "";
    $database = "film";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    if ($kobling->connect_error){
        die("Noe gikk galt:" . $kobling->connect_error);
    }

} else {
echo "Koblingen virker!";
}
if(isset($_POST["leggtil"])) {
	//lagrer skjemafeltene i enklere navn
	$film_id = $_POST["blad_id"];
	$kommentar = $_POST["kommentar"];
	
	$sql = "INSERT INTO kommentar (film_id, kommentar) VALUES ('$film_id', '$kommentar')";
	
	if($kobling->query($sql)) {
		echo "Spørringen $sql ble gjennomført.";
		} else {
			echo "Noe gikk galt med spørringen $sql ($kobling->error).";
		
		}
}
?>
<form method="POST">
	Kommentar
	<input type="text" name="kommentar">
	
	film_id (første opptreden i bladet)
	<input type="number" name="film_id">

	<?php
		//Henter ut bladene fra databasen
		$sql = "SELECT * FROM kommentar";
		$resultat = $kobling->query($sql);
		//starter select elementet utenfor løkken
		echo "<select name='film_id'>";
		//Lager et option-element for hver av bladene
		while($rad = $resultat->fetch_assoc()){
			$film_id = $rad["film_id"];
			$kommentar = $rad["kommentar"];
			
			echo "<option value=$film_id>$kommentar</option>";
		}
		//avslutter select-elementet utenfor løkken
		echo "</select>";
		?>
		
			<input type="submit" name="leggtil" value="Legg til">
	</form>



</body>
</html>