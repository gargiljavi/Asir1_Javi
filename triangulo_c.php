<?php
function Angulo ($a,$b,$c) {
		$r="Triangulo Acutangulo";
			if ($a==90 or $b==90 or $c==90)
				$r="Triangulo Rectangulo";
			if ($a>90 or $b>90 or $c>90)
				$r="Triangulo Obtusangulo";
			return $r;
}
function longitud ($d,$e,$f) {
	$r="triangulo escaleno";
	if ($d==$e || $e==$f)
		$r="triangulo isosceles";
	if ($e==$f and $d==$f)
		$r="Triangulo equilatero";
	return $r;
}
function C ($a,$b,$c,$d,$e,$f){
	return Angulo($a,$b,$c).' y '.longitud($d,$e,$f);
}
echo C(110,40,30,6,2,3).'El triangulo va a ser Triangulo Obtusangulo y escaleno'."<br>"."<br>";
echo C(95,40,45,6,3,3).'El triangulo va a ser Triangulo Obtusangulo y isosceles'."<br>"."<br>";
echo C(60,90,30,4,4,8).'El triangulo va a ser Triangulo Rectangulo y isosceles '."<br>"."<br>";
echo C(60,90,30,4,2,8).'El triangulo va a ser Triangulo Rectangulo y escaleno '."<br>"."<br>";
echo C(60,60,60,2,2,2).'El triangulo va a ser Triangulo  Acutangulo y equilatero'."<br>"."<br>";
echo C(70,60,50,2,5,2).'El triangulo va a ser Triangulo  Acutangulo y escaleno'."<br>";
?>