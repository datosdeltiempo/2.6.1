<?php 
error_reporting(0);ini_set('error_reporting', E_ALL);error_reporting(0);
//--- deshabilito los errores
?>
<?php 
// Comparamos los datos, si no existe contenido en datos.txt le asignamos unos nuevos.

// Leemos el archivo datos.txt
$lines = @file("datos.txt");
$api=$lines["0"];
$ciudad=str_replace(' ','+',$lines["1"]);
$diferencia=$lines["2"] + 32;

// Aqui tomamos los datos del formulario de configuracion datos.txt
if($_POST['api'] && $_POST['ciudad']) {
	$nuevoarchivo9 = fopen('datos.txt', "w+");
	fwrite($nuevoarchivo9, "".$_POST['api']."
".$_POST['ciudad']."
".$_POST['diferencia']."",0777);fclose($nuevoarchivo9);
header('Location: datemisora.php');
}
?>
<html>
<head>
<title>Datos del tiempo 2.6.1</title>
<meta http-equiv="Content-Type" content="text/html; charset=Windows-1252" />
<link rel="shortcut icon" href="/mini_logo.ico" type="image/ico">
<link rel="icon" href="/mini_logo.ico" type="image/ico">
<script type="text/javascript" src="javascript.js"></script>
<script language="javascript">
function enviar(form){
 form.submit();
}</script>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1 class="h1"><strong>Datos de tiempo 2.6.1</strong></h1>
<p>Si no sabe la ID de su ciudad haga <a href="http://www.riotercero.tk/3/" target="_blank">click aqui</a>  si es correcta seleccione su ciudad y se descargar&aacute; un archivo &quot;datos.txt&quot; luego guardarlo en Escritorio-&gt;Carpeta contenedora.<br>
* Si ya ha descargado el archivo <a href="datemisora.php">haz click aqui</a></p>
<div id="form-div"><font color="#FFFFFF" size="+3"><strong>Configurar</strong></font><br><br>
  <form id="form" name="conf" method="post" action="">
  <table width="451">
  <tr>
    <th width="141" align="left">API:</th>
    <td width="10">&nbsp;</td>
    <td width="284"><input name="api" type="text" onFocus="this.value='<?php echo $api;?>'" onBlur="if(this.value=='')this.value='<?php echo $api;?>'" value="<?php echo $api;?>" required /></td>
  </tr>
  <tr>
    <th align="left">CIUDAD ID:</th>
    <td>&nbsp;</td>
    <?php if(empty($lines["1"])){ $ciu=$ciudad; } else { $ciu=$lines["1"];} ?>
    <td><input name="ciudad" type="text" onFocus="this.value='<?php echo $ciu;?>'" onBlur="if(this.value=='')this.value='<?php echo $ciu;?>'" value="<?php echo $ciu;?>" required /></td>
  </tr>
  <tr>
    <th align="left">Diferencia + o -</th>
    <td>&nbsp;</td>
    <?php if(empty($lines["2"])){ $dife="0"; } else { $dife=$lines["2"];} ?>
    <td><input name="diferencia" type="text" onFocus="this.value='<?php echo $dife;?>'" onBlur="if(this.value=='')this.value='<?php echo $dife;?>'" value="<?php echo $dife;?>" required /> 
      Default: 0</td>
  </tr>
  <tr>
    <th height="56" align="left"><a href="#" class="btn" onClick="javascript:enviar(form);">Siguiente></a></th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </table>
</form> 
</div>
<hr>
<p><a href="contacto.php">Contacto: info@riotercero.tk</a> - <a href="http://www.riotercero.tk/radit.php" target="_blank">Visite nuestra pagina web</a></p>
</body>
</html>
