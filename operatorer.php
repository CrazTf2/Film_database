<?php
$tall1 = 17;
$tall2 = 9;
$tekst1 = "Karl";
$tekst2 = "Johan";

$sum = $tall1 + $tall2;
$differanse = $tall1 - $tall2;
$produkt = $tall1 * $tall2;
$kvotient = $tall1 / $tall2;

$langtekst = $tekst1 . $tekst2;
$bedretekst = $tekst1 . " " . $tekst2 . "s gate";

echo "summen blir @sum <br>";
echo "Differansen blir $differanse <br>";
echo "produktet blir $produkt <br>";
echo "Kvotienten blir $kvotient <br>";

echo "<br><br>";

echo "$langtekst <br>";
echo $bedretekst;
?>