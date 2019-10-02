

<body style="background:#B8DFFD">

<h1 align="center"> Tablas de Multiplcar</h1>
<?php
for($n=1;$n<11;$n++){
	echo '<div style="
		float:left;
		margin:10px;
		;
	">';
	for($i=1;$i<=10;$i=$i+1){
		echo $n;
		echo ' * ';
		echo $i;
		echo ' = ';
		echo ($n*$i);	
		echo '<br>';
	}
	echo '</div>';
}
?>
</body>
