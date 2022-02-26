<?php 
require_once('conexion.php'); 
$db = new Conexion();
$consulta = $db->query("SELECT tip_id AS id, tip_nombre AS nom FROM tipo_documento");
$tipo = $consulta->fetch_all();
?>