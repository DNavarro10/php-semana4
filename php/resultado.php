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
		
			if(isset($operacion)){
				
			
				switch ($operacion == $operacion){
					
					case ($operacion == 1):
					echo "El Resultado de la operacion es : " .$cent_Metro ->cent_To_metros($valor) ." metros"; 
					break;
				
					case ($operacion == 2):
					echo "El Resultado de la operacion es : " .$metro_Cent ->metros_To_cent($valor) . " centimetros";
					break;
				
					case ($operacion == 3):
					echo "El Resultado de la operacion es : " .$metro_kilo ->metros_To_kilo($valor) . " kilometros";
					break;
					
					case ($operacion == 4):
					echo "El Resultado de la operacion es : " .$kilo_metro ->kilo_To_metros($valor) . " metros";
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
