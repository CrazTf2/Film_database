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
    echo "koblingen virker.";
}
$kobling ->query("SELECT * FROM film");

$sql = "SELECT * FROM film";

$resultat = $ ->query($sql);

echo "<table>";
echo "<tr>";
echo "<th>bladID</th>";
echo "<th>tittel</th>";
echo "</tr>";

while($rad = $resultat->fetch_assoc())
{
    $film_id = $rad ["filmid"];
    $tittel = $rad ["tittel"];

    echo "<tr>";
    echo "<td>$film_id</td>";
    echo "<td>$bladnavn <a/></td>";
    echo "</tr>";

}
echo "</table>";
?>
</body>
</html>