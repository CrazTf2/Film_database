<?php
echo "<html>";
echo "<body>";

$n = 'du';
if(isset($_GET["navn"]))
	$n = $_GET["navn"];

	
echo "<h1>hei $n</h1>";

?>

<form>
hva heter du?<input name="navn"/>
<input name="aar"/>
</form>
</body>
</html>