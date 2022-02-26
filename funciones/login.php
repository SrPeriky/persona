<?php 
echo 'Cargando...';
require_once('../conexion.php'); 
require_once('encriptar.php'); 
$db = new Conexion();
$user = "";
$clave = "";
$ruta = 'login';
if (isset($_POST["user"])) $user = $_POST["user"];
if (isset($_POST["clave"])) $clave = $_POST["clave"];
$clave = encriptar($clave);
//$clave = md5($clave);
//$ruta = null;
$consulta = $db->query("SELECT * FROM usuario WHERE usuario.usuario_email = '$user' AND usuario.usuario_pasw = '$clave'");
//$colsulta = $consulta->result();
if($db->rows($consulta)) $ruta = 'tabla';
//http_redirect('index.php?ruta='.$ruta);
//echo $db->recorrer($consulta); //"SELECT * FROM usuario WHERE usuario.usuario_email = '$user' AND usuario.usuario_pasw = '$clave'"
//http_redirect('index.php?ruta='.$ruta);
header('Location:'.'../index.php?p='.$ruta);
?>