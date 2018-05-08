<?php
$mormor = rand(0,1);

echo "Datamaskinen regnet seg til $mormor. <br>";


if($mormor == 0){
echo "Mormor sier nei";
} else if($mormor == 1){
	echo "Mormor sier ja";
}
?>