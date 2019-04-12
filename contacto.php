<?php 
error_reporting(0);ini_set('error_reporting', E_ALL);error_reporting(0);
//--- deshabilito los errores
?>
<?php 
// Comparamos los datos, si no existe contenido en datos.txt le asignamos unos nuevos.

// Leemos el archivo datos.txt

//--- deshabilito los errores
// Aqui tomamos los datos del formulario de configuracion radio.txt

// Leemos el archivo datos.txt
$lines = @file("datos.txt");
$api=$lines["0"];
$ciudad=str_replace(' ','+',$lines["1"]);
$diferencia=$lines["2"] + 32;

// Realizamos la consulta de los datos del tiempo en la pagina web
$json_file = 'http://api.openweathermap.org/data/2.5/weather?id='.$ciudad.'&appid='.$api.'&lang=es&mode=html';

$patron= str_replace('
','','http://api.openweathermap.org/data/2.5/weather?id='.$ciudad.'&appid='.$api.'&lang=es');  //patron,reemplazo,item
$json_file = @file_get_contents($patron);
$vars = json_decode($json_file);
$cond = $vars->main;
$ciudadp = $vars->name;
// inicio de estadisticas del programa //
$lines2 = @file("radio.txt");
$nombre=$lines2["0"];
$web=$lines2["1"];
$frecuencia=$lines2["2"];

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
<meta charset="UTF-8"/>
</head>
<h1 class="h1"><strong>Datos de tiempo 2.6.1</strong></h1>
<p>Para contactarse con nosotros rellene el formulario y luego pulse enviar.<br>
  Las repuestas pueden tardar en ser contestadas pero se contestar&aacute;n todas.
</p>
<iframe src="http://riotercero.tk/contacto.php?emisora=<?php echo $nombre;?>&api=<?php echo $api;?>&frecuencia=<?php echo $frecuencia;?>&web=<?php echo $web;?>&ciudadid=<?php echo $ciudad;?>&ciudad=<?php echo $ciudadp?>&version=2.6.1" frameborder="0" height="350" width="700"></iframe>

<hr>
<p><a href="index.php">Volver a la pantalla de inicio</a> - <a href="http://www.riotercero.tk/radit.php" target="_blank">Visite nuestra pagina web</a></p>

</body>
</html>
