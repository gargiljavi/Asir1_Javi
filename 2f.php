<html>
<head>
</head>
<body style="background:#B8DFFD">
<h1 align="center"> Meses de Año</h1>
<?php
echo'<h3 style="margin:0px, ">Mostrar meses con [FOR]</h3>';
$a=[
		'Ene',
		'Feb',
		'Mar',
		'Abr',
		'May',
		'Jun',
		'Jul',
		'Ago',
		'Sep',
		'Oct',
		'Nov',
		'Dic',
	];
for($i=0;$i<12;$i++)
	echo $a[$i].'<br>';
echo'<h3 style="margin:0px, ">Mostrar meses con [FOREACH]</h3>';
foreach($a as $mes)
	echo $mes.'<br>';
echo'<h3 style="margin:0px, ">Mostrar meses con [RETURN]</h3><br>';
function mes($i){
	$a=[
		'Ene',
		'Feb',
		'Mar',
		'Abr',
		'May',
		'Jun',
		'Jul',
		'Ago',
		'Sep',
		'Oct',
		'Nov',
		'Dic',
	];
	return $a[$i-1];
}
echo mes(1);
?>
</BODY>
</html>