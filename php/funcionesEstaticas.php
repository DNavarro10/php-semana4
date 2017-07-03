<?php 

	/* Punto A mostar hora haciendo llamado a función estatica*/
	
	echo '<b>Mostrar Hora con funcion estatica</b><br><hr>';
	class reloj{
		
		static function hora(){
			echo date('h:i:s');
			
		}
	}
	
	reloj::hora();
	echo "<hr>";

	
	/* Punto B clase persona */
	class persona{
		
		public $nombre;
		public $edad;
		
		function __construct($nombre, $edad){
		$this -> Nombre = $nombre;
		$this -> Edad = $edad;

		}
		
	}
	
		
		/* valores*/

		$valor1 = new persona("Juan","27");
		$valor2 = new persona("Sonia","32");
		$valor3 = new persona("Juan","27");

		/* comparacion simple  = */
		echo 'Comparacion simple <br><hr>';
		if($valor1 == $valor3){
			echo "Iguales por comparación simsple <br>";
		}else{
			echo "Diferentes por comparación simple <br>";
		}
		
		if($valor2 == $valor3){
			echo "Iguales por comparación simsple <br>";
		}else{
			echo "Diferentes por comparación simple <br>";
		}

		echo '<hr><br>';
		/* comparacion de identidad ===*/
		echo 'Comparacion identidad<br><hr>';
	
		if($valor1 === $valor3){
			echo "Iguales por comparación identidad <br>";
		}else{
			echo "Diferentes por comparación identidad <br>";
		}
		if($valor2 === $valor3){
			echo "Iguales por comparación identidad <br>";
		}else{
			echo "Diferentes por comparación identidad <br>";
		}
		echo '<hr><br>';

	
		

?>