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

function triangulos($l){


	list($a,$b,$c)=$l;

	$x=($a**2-$b**2+$c**2)/(2*$c);
	$h=sqrt($a**2-$x**2);
	$A=atan($h/($c-$x))*360/(2*pi());
	$B=atan($h/($c-$x))*360/(2*pi());
	$C=180-$A-$B;

	
	$r=[
		'angulos'=>[$A,$B,$C],
		'tipo_lados'=>longitud($a,$b,$c),
		'tipo_angulos'=>Angulo($a,$b,$c),
	];

	
	return $r;
}

$r=triangulos([1,1,sqrt(2)]);

	echo '<pre>';
	print_r($r);
	echo '</pre>';
	echo"Triangulo Isosceles y Triangulo Acutangulo";