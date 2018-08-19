<?php 

	$array = array(1,2,3,4,5,6,7,8,9,10);

	function somaNumeroArray($array){

		$totalArray = 0;

		//A função sizeof retorna o tamanho do array

		for ($i=0; $i < sizeof($array) ; $i++) { 
			$totalArray = $array[$i] + $totalArray;
		}

		return $totalArray;
	}

	$resultado = somaNumeroArray($array);
	echo $resultado;
?>