<?php
function Angulo ($a,$b,$c) {
		$r="Triangulo Acutangulo";
			if ($a==90 or $b==90 or $c==90)
				$r="Triangulo Rectangulo";
			if ($a>90 or $b>90 or $c>90)
				$r="Triangulo Obtusangulo";
			return $r;
}
echo Angulo(110,40,30)."<br>";
echo Angulo(60,90,30)."<br>";
echo Angulo(60,60,60)."<br>";
?>