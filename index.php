<?php 
	$name = "";
	if(isset($_GET['name'])){
	
		$name = $_GET['name'];
	}
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php
		echo "<h1>hallo ".$name."</h1>";
	?>
	
	<form>
		<input type="text" name = "name">
		<input type="submit">
	
	</form>
	
</body>
</html>