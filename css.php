<?php

if(isset($_POST['submit']))

{
  $name = $_POST['name'];

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
<body style="background-color:black;">

<center>
<table "width:100%"  "height:100%" >
<tr>
	<td width="15%"  height="100%" valign="top">
	<font style="color:white">
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
<div>
<font color="white" size="4">
</div>

<p>
<p style="padding:0; margin:0;">¿Quieres comprar</p>
<p style="padding:0; margin:0;">un subaru?</p>
<p style="padding:0; margin:0;">Te llamamos!!!</p>
</p>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

 <br> Numero de Telefono: 

<input style="type:text name:name">

 

<input type="submit" name="submit" value="Enviar">
 
 
</font>
</form>



	</td>
	<td width="85%"  height="100%" bgcolor="#004890" > 
	<center>

	<span style="color:white;">
	<h1  style="text-decoration:underline;">Subaru Impreza WRX</h1>
	</span>
	</center>
	<center>
	<img src="s1.png"  width="150"  height="150" >

	<font style="color:white">
	<p style="font-weight:bold; text-decoration:underline;">El coche definitivo preparado para todo.</p><img src="Su.png"  width="500"  height="350" ></p>
	<h2>Traccion a las 4 ruedas, buen peso, motor con 345 CV, veloz,</h2><h2>bonito, lo mejor del mercado a un buen precio. 40.000$</h2>
	<h1 style="text-decoration:underline;">TIPOS DE SUBARU</h1>
	<h2>Primera generación</h2>
	<h3>1992-1998</h3>
	<h3>1998-2000</h3>
	<h2>Segunda generación</h2>
	<h3>2000-2004</h3>
	<h3>2004-2007</h3>
	<h2>Tercera generación</h2>
	<h3>2007-2010</h3>
	<h3>2010-2012</h3>
	<h2>Cuarta generación</h2>
	<h3>2012- 2015</h3>
	<h3>2015- 2017</h3>
	<h2>Quinta generación</h2>
	<h3>2018- Actualidad</h3>
	</center>
	</td></tr>
	
</table>
</center>

</body>
</html>