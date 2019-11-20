<?php 
	$name = "";
	if(isset($_GET['name'])){
	
		$name = $_GET['name'];
	}
	$Zahl1 = $_GET['Zahl1'];
	$Zahl2 = $_GET['Zahl2'];
	$Antwort = $Zahl1 * $Zahl2;
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	
	<form>
		x=<input type="number_format" name = "Zahl1">

		
		y=<input type="number_format" name = "Zahl2">
		<input type="submit">
	
	<?php
		echo "<h1>".$Antwort."</h1>";
	?>
	</form>
	
</body>
</html>