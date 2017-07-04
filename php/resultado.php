<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resultado PHP</title>
	<link rel="stylesheet" href="../css/Style.css">
</head>
<body>
	<div class="main resultado">
		<div class="warp">
			<h2>La conversion de <?php echo $_POST['operacion'];?></h2>
			<!-- Resultado de operacion -->
		<?php 
			/* Clase con funciones de conversion*/
			include_once "operaciones.php";
			
			$valor = $_POST["valor"];
			$operacion = $_POST['operacion'];
		
			if(isset($_POST["valor"])){
				
				switch($operacion)
				{	
					case ($operacion):
					echo "El Resultado de la operacion es : " .$cent_Metro ->cent_To_metros($valor);
					break;
				
					case ($operacion):
					echo "El Resultado de la operacion es : " .$metro_Cent ->metros_To_cent($valor);
					break;
				
					case ($operacion):
					echo "El Resultado de la operacion es : " .$metro_kilo ->metros_to_kilo($valor);
					break;
					
					case ($operacion):
					echo "El Resultado de la operacion es : " .$kilo_metro ->kilo_To_metros($valor);
					break;
				}
				
			}
			
		?>			
		</div>
		<form>
			<div align="center">
	  			<!-- Boton para volver-->
		  		<input type="button" value="VOLVER" name="Back2" onclick="history.back()" />
		  	</div>
		</form>

	</div>

</body>
</html>
