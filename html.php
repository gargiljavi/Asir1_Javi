<?php

if(isset($_POST['submit']))

{$name = $_POST['name'];

 

echo "Registo completado : <b> $name </b><br><br>";

  $archivo="suscriptores.txt";

  $proceso=fopen($archivo,"a") or die("basura");

  $datos="Registro suscriptor:".$name."\r\n";

  fwrite($proceso,$datos);

  fclose($proceso);

 
}


?>

<html>
<head>
<title>Subaru Impreza WRX</title>
</head>
<!--<body style="background-color:#0040FF">-->
<body bgcolor="##000000">
<center>
<table bgcolor="black" width="100%"  height="100%" >
<tr>
	<td width="15%"  height="100%" valign="top">
	<font color="white">
	<table border="1" width="100%" >
			<tr><td><font color="white"><center>Largo  4.595mm</center></font></td></tr>
			<tr><td><font color="white"><center>Ancho  1.795mm </center></font></td></tr>
			<tr><td><font color="white"><center>Alto 1.475mm</center></font></td></tr>
			<tr><td><font color="white"><center>Motor Bóxer</center></font></td></tr>
			<tr><td><font color="white"><center>Gasolina</center></font></td></tr>
			<tr><td><font color="white"><center>2.457 cc</center></font></td></tr>
			<tr><td><font color="white"><center>150 cv</center></font></td></tr>
	</table>
</font>
<br>
<font color="white" size="4">
<p>¿Quieres comprar <br> un subaru?<br>Te llamamos!!!</p>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

 <br> Numero de Telefono: 

<input type="text" name="name"><br><br>

 

<input type="submit" name="submit" value="Enviar"><br>

 
</font>
</form>



	</td>
	<td width="85%"  height="100%" bgcolor="#004890" > 
	<center>

	<font color="white">
	<h1><u>Subaru Impreza WRX</u></h1>
	</font>
	</center>
	<center>
	<img src="s1.png"  width="150"  height="150" >

	<font color="white">
	<p><b><i>El coche definitivo preparado para todo.</i></b></h2><br><img src="Su.png"  width="500"  height="350" >
	<h2>Traccion a las 4 ruedas, buen peso, motor con 345 CV, veloz,<br> bonito, lo mejor del mercado a un buen precio. 40.000$<h2>
	<h1><u>TIPOS DE SUBARU</u></h1>
	<h2>---Primera generación</h2>
	<h3>(1992-2000)</h3>
	<h2>---Segunda generación</h2>
	<h3>(2000-2007)</h3>
	<h2>---Tercera generación</h2>
	<h3>(2007-2012)</h3>
	<h2>---Cuarta generación</h2>
	<h3>(2012- 2017)</h3>
	<h2>---Quinta generación</h2>
	<h3>(2018- Actualidad)</h3>
	</center>
	</td></tr>
	




</table>
</center>

</body>
</html>