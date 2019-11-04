<?php
function longitud ($d,$e,$f) {
	$r="triangulo escaleno";
	if ($d==$e || $e==$f)
		$r="triangulo isosceles";
	if ($e==$f and $d==$f)
		$r="Triangulo equilatero";
	return $r;
}
function Angulo ($a,$b,$c) {
		$r="Triangulo Acutangulo";
			if ($a==90 or $b==90 or $c==90)
				$r="Triangulo Rectangulo";
			if ($a>90 or $b>90 or $c>90)
				$r="Triangulo Obtusangulo";
			return $r;
}
$a= [
	'lados'=>[1,1,1],
	'angulo'=>[60,60,60],
	];
$a= [
	'lados'=>[1,1,1.4142],
	'angulo'=>[90,45,45],
	];

function C ($a){
	return longitud(
		$a['lados'][0],
		$a['lados'][1],
		$a['lados'][2]).' y '.Angulo(
		$a['angulo'][0],
		$a['angulo'][1],
		$a['angulo'][2]);
}
echo C($a);
?>





