<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado PHP</title>
	<link rel="stylesheet" href="../css/Style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
	<div class="main resultado">
		<div class="warp">
			<h2>conversion</h2>
			<!-- Resultado de operacion -->
		<?php 
			/* Clase con funciones de conversion*/
			include_once "conversion.php";
		?>		
			
		</div>
		<form>
			<div align="center">
	  			<!-- Boton para volver-->
		  		<input type="button" value="VOLVER" class="btn btn-success" name="Back2" onclick="history.back()" />
		  	</div>
		</form>

	</div>

</body>
</html>
