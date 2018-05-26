<?php 

/**
 * 1. Sumar los números números naturales hasta N (se lo damos nosotros) de forma recursiva. 
 * 2. Factorial de un número.
 */
class Recursividad 
{
	
	function __construct(){}

	public function sumaNatural(int $n){

		$res;
		if($n == 1):
			return 1;
		else:
			$res = $n + $this->sumaNatural($n-1);
		endif;	
		return $res;

	}

	public  function factorial(int $n){

		$res;
		if($n == 1):
			return 1;
		else:
			$res = $n * $this->factorial($n-1);
		endif;	
		return $res;

	}

	public  function fibonacci($n){

		if($n == 0 ):
			return 0;
		elseif($n == 1):
			return 1;
		else:
			return $this->fibonacci($n-1) + $this->fibonacci($n-2);
		endif;

	}
}

$recursividad = new Recursividad();
echo $recursividad->sumaNatural(10);
echo '<br>';
echo $recursividad->factorial(10);
echo '<br>';
echo $recursividad->fibonacci(9);

?>