<?php 
			/* Clase con funciones de conversion para el resultado*/
			include_once "operaciones.php";
			
			$valor = $_POST["valor"];
			$operacion = $_POST['operacion'];
		
			if(isset($operacion)){
				
			
				switch ($operacion == $operacion){
					case ($operacion == 0):
					echo "<script>alert('Elegir Operación');history.go(-1)</script>"; /* redirige en caso de no elejir operacion*/
					break;
						
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
