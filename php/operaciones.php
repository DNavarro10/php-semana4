<?php 
	
require 'constantes.php';

/* clase para albergar operaciones*/
class conversiones{
	
	/* Metros = Centímetros introducidos por el usuario dividido entre 100 */
	function cent_To_metros($valor){
		return ($valor/cien);
		echo "mt";
	
	}
	
	/* Centímetros = Metros introducidos por el usuario por 100 */
	function metros_To_cent($valor){
		return ($valor*cien);
	
	}
	
	/* Kilómetros = Metros introducidos por el usuario entre 1000 */
	function metros_To_kilo($valor){
		return($valor/mil);
	}
	
	/* Metros = Kilómetros introducidos por el usuario por 1000. */
	function kilo_To_metros($valor){
		return($valor*mil);
	}
	
	

}	

/* Creacion de objetos */
	$cent_Metro = new conversiones;
	$metro_Cent = new conversiones;
	$metro_kilo = new conversiones;
	$kilo_metro = new conversiones;

?>