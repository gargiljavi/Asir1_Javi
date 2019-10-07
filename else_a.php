<?php
function nota($a){
	if ($a>5) { 
	$r='Apto';
	}
	else{
	$r='No Apto';
	}
	return $r;
}
echo '6'.'='.nota (6).'<br>';
echo '2'.'='.nota (2);

?>
