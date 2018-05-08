<?php
$fornavn = $_GET["fornavn"];
$etternavn = $_GET["etternavn"];

//åpne databasen
$k = new mysqli("localhost","root","","elev");
//sjekk at alt har fungert
//skriv til databasen
$k->query("INSERT INTO `skole`.`elev` (`Fornavn`,`etternavn`)VALUES ($fornavn, $etternavn)");
?>