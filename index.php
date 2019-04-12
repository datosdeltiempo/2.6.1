<?php @include('include_header.php');?>
<?php 
error_reporting(0);ini_set('error_reporting', E_ALL);error_reporting(0);
//--- deshabilito los errores<br>
if (!file_exists('datos.txt') || !file_exists('radio.txt') ) {
   echo "<script language='javascript'>window.location='configurar.php'</script>";
}
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
<body onLoad="myFunction()">
<h1 class="h1"><strong>Datos de tiempo</strong></h1>
<?php echo $div_actualizar;?>
La actualizacion automatica se realiza cada 15 minutos.<br>
<p><a class="btn" href="configurar.php">Configurar</a> <a class="btn" href="javascript:window.location.reload();">Actualizar ahora</a></p>
&Uacute;ltima actualizaci&oacute;n fu&eacute; a las: <?php include('include_body.php');?>
<hr>
<p><a href="contacto.php">Contacto: info@riotercero.tk</a> - <a href="http://www.riotercero.tk/radit.php" target="_blank">Visite nuestra pagina web</a></p>
</body>
</html>
