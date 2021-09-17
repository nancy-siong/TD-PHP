<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title> testVoiture </title>
	</head>

	<body>
		<?php 
			require_once("Voiture.php");
			$voit = new Voiture("Renault ", "Bleu ", "11222AB");
			$voit -> afficher();
		?>
	</body>
</html>
