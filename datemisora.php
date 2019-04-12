<?php 
error_reporting(0);ini_set('error_reporting', E_ALL);error_reporting(0);
//--- deshabilito los errores
// Aqui tomamos los datos del formulario de configuracion radio.txt
if($_POST['nombre']) {$nuevoarchivo11 = fopen('radio.txt', "w+");
fwrite($nuevoarchivo11, "".$_POST['nombre']."
".$_POST['web']."
".$_POST['frecuencia']."",0777);fclose($nuevoarchivo11);
echo "<script language='javascript'>window.location='zarayradit.php'</script>";
}
// Leemos el archivo datos.txt
$lines = @file("datos.txt");
$api=$lines["0"];
$ciudad=str_replace(' ','+',$lines["1"]);
$diferencia=$lines["2"] + 32;

// Realizamos la consulta de los datos del tiempo en la pagina web
$json_file = 'http://api.openweathermap.org/data/2.5/weather?id='.$ciudad.'&appid='.$api.'&lang=es&mode=html';
//echo '<iframe src="'.$json_file.'" style="width:100%;height:150px;" scrolling="no" frameborder="no"></iframe>';
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
$esta="http://riotercero.tk/actualizar.php?ver=2.6.1&nom=".$nombre."&ciu=".$ciudadp."&web=".$web."&frec=".$frecuencia;
$estadistica=str_replace(' ','_',$esta);
echo '<iframe src="'.$estadistica.'" style="display:none"></iframe>';

// Fin de estadisticas del programa //
?>
<html>
<head>
<title>Datos del tiempo 2.6.1</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252" />
<link rel="shortcut icon" href="/mini_logo.ico" type="image/ico">
<link rel="icon" href="/mini_logo.ico" type="image/ico">
<script language="javascript">
function enviar(form){
 form.submit();
}</script>
<script type="text/javascript" src="javascript.js"></script>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1 class="h1"><strong>Datos de tiempo 2.6.1</strong></h1>
<?php
if(file_exists('datos.txt')) {
    echo "<font color='#33CC00'>Correcto! Ya estan los datos de su ciudad configurados.</font>";
} else {
    echo "<font color='#FF0000'>Hay un problema, vea el <a target='_bank' href='http://www.riotercero.tk/radit.php'>faq. de ayuda.</a></font>";
}?>
<div id="form-div"><font color="#FFFFFF" size="+3"><strong>Configurar</strong></font><br><br>
  <form id="form" name="conf2" method="post" action="">
  <table width="451">
  <tr>
    <th width="194" align="left">Nombre de la emisora:</th>
    <td width="11">&nbsp;</td>
   <?php if(empty($lines2["0"])){ $pnombre=$nombre; } else { $pnombre=$lines2["0"];} ?>
    <td width="230"><input name="nombre" type="text" onFocus="this.value='<?php echo $pnombre;?>'" onBlur="if(this.value=='')this.value='<?php echo $pnombre;?>'" value="<?php echo $pnombre;?>"/></td>
  </tr>
  <tr>
    <th align="left">Pagina web:</th>
    <td>&nbsp;</td>
    <?php if(empty($lines2["1"])){ $pweb=$web; } else { $pweb=$lines2["1"];} ?>
    <td><input name="web" type="text" onFocus="this.value='<?php echo $pweb;?>'" onBlur="if(this.value=='')this.value='<?php echo $pweb;?>'" value="<?php echo $pweb;?>"/></td>
  </tr>
  <tr>
    <th height="24" align="left">Frecuencia/Online</th>
    <td>&nbsp;</td>
    <?php if(empty($lines2["2"])){ $frec=$frecuencia; } else { $frec=$lines2["2"];} ?>
    <td><input name="frecuencia" type="text" onFocus="this.value='<?php echo $frec;?>'" onBlur="if(this.value=='')this.value='<?php echo $frec;?>'" value="<?php echo $frec;?>"/></td>
  </tr>
  <tr>
    <th height="56" align="left"><a href="#" class="btn" onClick="javascript:enviar(form);">Siguiente></a></th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form>
</div>
<hr><p><a href="contacto.php">Contacto: info@riotercero.tk</a> - <a href="http://www.riotercero.tk/radit.php" target="_blank">Visite nuestra pagina web</a></p>
</body>
</html>
