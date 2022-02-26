<?php 
require_once('../conexion.php'); 
$db = new Conexion();
$fecha = date('Y-m-d');
$tip = $_POST['tip'];
$id = $_POST['id'];
$num = $_POST["num"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$consulta = $db->query("UPDATE persona SET persona_tip_id = $tip, persona_identificacion = $num, persona_nombre = '$nom', persona_apellido = '$ape', persona_fecha = '$fecha' WHERE persona.persona_id = $id");
if($consulta) header('Location:'.'../index.php?p=tabla');
else echo "Error ";
?>