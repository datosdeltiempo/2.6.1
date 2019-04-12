<?php 
error_reporting(0);ini_set('error_reporting', E_ALL);error_reporting(0);
//--- deshabilito los errores
?>
<html>
<head>
<title>Datos del tiempo 2.6.1</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252" />
<link rel="shortcut icon" href="/mini_logo.ico" type="image/ico">
<link rel="icon" href="/mini_logo.ico" type="image/ico">
<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.js"></script>
<script type="text/javascript" src="javascript.js"></script>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1 class="h1"><strong>Datos de tiempo 2.6.1</strong></h1>
<strong>Para los usuarios de RADIT</strong> deben de copiar todo el programa, incluyendo carpetas y archivos.
<br>
Sin dejar ningun elemento sin copiar, para luego pegarlo en la siguiente direcci&oacute;n:<br>
<font color='#33CC00'><?php 
$raditdir=str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']."/");
echo $raditdir;?></font><br>
Repuesta: <?php
$raditdira=str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']."/radit.exe");
if (file_exists($raditdira)) {
    echo "<font color='#33CC00'>Radit ya est&aacute; en este directorio, es posible que funcione!</font>";
} else {
    echo "<font color='#FF0000'>Radit no esta en este directorio. Verifique la ubicacion de los archivos.</font>";
}
?>
<hr>
<p><strong>Y para los de ZaraRadio</strong><br>
  En: Herramientas -&gt; Opciones -&gt; HTH -&gt; Importar desde Archivo -&gt;<br>
  <strong>Copiar y Pegar</strong> esta direccion:<br>
<code><font color="#FF3300" size="+1"><?php $zararadio=str_replace("/","\\",$_SERVER['DOCUMENT_ROOT']."/Currenweather/currenweather.html");echo $zararadio;?></font></code> <a href="javascript:void(1);" onClick="seleccionarCode(this,1);">Seleccionar</a><br>Luego-&gt; Aceptar.</p>
<hr>
<p><a href="index.php" class="btn">Finalizar</a></p>
<hr>
<p><a href="contacto.php">Contacto: info@riotercero.tk</a> - <a href="http://www.riotercero.tk/radit.php" target="_blank">Visite nuestra pagina web</a></p></body>
</html>
