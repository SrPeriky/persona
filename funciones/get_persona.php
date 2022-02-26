<?php 
require_once('conexion.php'); 
$db = new Conexion();
$consulta = $db->query("SELECT persona.persona_id AS id, tipo_documento.tip_nombre AS tipo, tipo_documento.tip_sigla AS sigla, persona.persona_identificacion AS num, persona.persona_nombre AS nom, persona.persona_apellido AS ape, persona.persona_fecha AS fecha FROM persona JOIN tipo_documento ON tipo_documento.tip_id = persona.persona_tip_id AND persona.persona_id = $id");
if($consulta) $persona = $consulta->fetch_all(); else $persona = false;
/*
0 -> id
1 -> tipo
2 -> sigla
3 -> num
4 -> nom
5 -> ape
6 -> fecha
*/

?>