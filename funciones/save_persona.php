<?php 
require_once('../conexion.php'); 
$db = new Conexion();
$fecha = date('Y-m-d');
$tip = $_POST['tip'];
$num = $_POST["num"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$consulta = $db->query("INSERT INTO persona(persona_tip_id, persona_identificacion, persona_nombre, persona_apellido, persona_fecha) VALUES (
	$tip,
	$num,
	'$nom',
	'$ape',
	'$fecha'
)");
if($consulta) header('Location:'.'../index.php?p=tabla');
else echo "Error ";
?>