<?php
function calcula($a,$b){
	$r=null;
	$r=$r. "Suma:".$a."+".$b."=".($a+$b).'</br>';
	$r=$r."Resta:".$a."-".$b."=".($a-$b).'</br>';
	$r=$r. "Multiplicar:".$a."*".$b."=".($a*$b).'</br>';
	if($b!=0) $r=$r. "Division:".$b."/".$a."=".($b/$a).'</br>';
	return $r;
}
$r=calcula(18,20);
echo $r;

$r= calcula(2,0);
echo $r;

?>
