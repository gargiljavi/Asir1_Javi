<?php
function longitud ($a,$b,$c) {
		$r="triangulo escaleno";
			if ($a==$b || $a==$c ||$b==$c){
				$r="triangulo isosceles";
			if ($b==$c and $a==$c)
				$r="Triangulo equilatero";
			}
			return $r;
}
echo "Equilatero"."<br>";
echo longitud(2,2,2)."<br>";
echo "Isosceles"."<br>";
echo longitud(4,4,2)."<br>";
echo longitud(2,4,2)."<br>";
echo longitud(2,4,4)."<br>";
echo "Escaleno"."<br>";
echo longitud(1,2,3)."<br>";
echo longitud(2,1,3)."<br>";
echo longitud(2,3,1)."<br>";
?>