<?php
function longitud ($a,$b,$c) {
		$r="triangulo escaleno";
			if ($a==$b || $b==$c){
				$r="triangulo isosceles";
			if ($b==$c and $a==$c)
				$r="Triangulo equilatero";
			}
			return $r;
}
echo longitud(2,2,2)."<br>";
echo longitud(4,4,2)."<br>";
echo longitud(1,2,3)."<br>";
?>