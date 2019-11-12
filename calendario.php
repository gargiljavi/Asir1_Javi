
<?php
function mes($n){
	$a=[
	[
		'mes'=>'Enero',
		'dias'=>'31',
		'estacion'=>'Invierno'
	],
	[
		'mes'=>'Febrero',
		'dias'=>'28/29',
		'estacion'=>'Invierno'
	],
	[
		'mes'=>'Marzo',
		'dias'=>'31',
		'estacion'=>'Primavera'
	],
	[
		'mes'=>'Abril',
		'dias'=>'30',
		'estacion'=>'Primavera'
	],
	[
		'mes'=>'Mayo',
		'dias'=>'31',
		'estacion'=>'Primavera'
	],
	[
		'mes'=>'Junio',
		'dias'=>'30',
		'estacion'=>'Verano'
	],
	[
		'mes'=>'Julio',
		'dias'=>'31',
		'estacion'=>'Verano'
	],
	[
		'mes'=>'Agosto',
		'dias'=>'31',
		'estacion'=>'Verano'
	],
	[
		'mes'=>'Septiembre',
		'dias'=>'30',
		'estacion'=>'Otoño'
	],
	[
		'mes'=>'Octubre',
		'dias'=>'31',
		'estacion'=>'Otoño'
	],
	[
		'mes'=>'Noviembre',
		'dias'=>'30',
		'estacion'=>'Otoño'
	],
	[
		'mes'=>'Diciembre',
		'dias'=>'31',
		'estacion'=>'Invierno'
	],
		
	];
	$r=null;
	$r=$r.'Mes : '.' '.$a[$n-1]['mes'].'<br>';
	$r=$r.'Dias del mes:'.' '.$a[$n-1]['dias'].'<br>';
	$r=$r.'Estacion del mes:'.' '.$a[$n-1]['estacion'].'<br>';
	return $r;
}
echo mes(1)."31 dias de Enero es Invierno".'<br>';
echo mes(5)."31 dias de Mayo es Primavera".'<br>';
echo mes(8)."31 dias de Enero es Verano".'<br>';
echo mes(11)."30 dias de Noviembre es Otoño".'<br>';
?>
