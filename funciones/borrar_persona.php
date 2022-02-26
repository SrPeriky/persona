<?php 
require_once('conexion.php'); 
$db = new Conexion();
$consulta = $db->query("DELETE FROM persona WHERE persona.persona_id = $id");
if($consulta) header('Location:'.'index.php?p=tabla');
else echo "Error ";
?>