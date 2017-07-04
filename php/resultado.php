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
			require "operaciones.php";
			
			$valor = $_POST["valor"];
			$operacion = $_POST["operacion"];
			
			if (isset($_POST["valor"])){
				switch("Cent&iacute;metros a Metros")
				{	
					case "Cent&iacute;metros a Metros": cent_To_metros($valor);
					echo 'El Resultado de la operacion es : '.$_POST["$valor"];
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
