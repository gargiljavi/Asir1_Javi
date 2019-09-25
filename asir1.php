<?php
echo "<a href='http://192.168.0.84/Asir1-RMH/asir1.php'>Rolando</a>";
echo "<br>";
echo '<p>Hola esta es la activdad de Javier Garcia</p>'; 
echo "<br>";
echo "<a href='http://192.168.0.94/asir1_sergio/asir1.php'>Sergio</a>";
$file = fopen("visitas.txt","a");
$ip=$_SERVER['REMOTE_ADDR'];
$dates = date('H:i:s Y-m-d ');
$datos = "La ip es ".$ip." con fecha ".$dates."\r\n";
echo fwrite($file,$datos);
fclose($file);
?> 
