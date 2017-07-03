<?php 
	include 'figura.php';
	
	class circulo extends figura{
		

		function __construct(){
			
			echo "soy redondo";	
		
		}
		
		public function area(){
			$areaCirculo = pow(Radio,2)*PI;
			
			return $areaCirculo;
		}

		public function perimetro(){
			$perimetroCirculo = 2*3.14*Radio; 
			return $perimetroCirculo;
		}
}
	$mostrarArea = new circulo();
	$mostrarPerime = new circulo();
	echo "<br><hr>";
	echo "El radio del circulo es = " .$mostrarArea -> area();
	echo "<br><hr>";
	echo "El perimetro del circulo es = ".$mostrarPerime -> perimetro();
?>