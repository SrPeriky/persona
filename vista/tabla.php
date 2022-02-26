<?php if($action==null) require_once('vista/crear.php'); else if($action == 1 && $id != null) require_once('vista/editar.php'); else if($action == 2 && $id != null) require_once('funciones/borrar_persona.php'); require_once('funciones/get_tabla.php'); ?>
<h2>Lista de personas</h2>
<table border="2">
	<tbody>
		<tr>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>sigla</th>
			<th>tipo</th>
			<th>numero</th>
			<th>fecha</th>
			<th>editar</th>
			<th>borrar</th>
		</tr>
		<?php foreach ($tabla as $key):?>
		<tr>
			<td> <?php echo $key[4]?> </td>
			<td> <?php echo $key[5]?> </td>
			<td> <?php echo $key[2]?> </td>
			<td> <?php echo $key[1]?> </td>
			<td> <?php echo $key[3]?> </td>
			<td> <?php echo $key[6]?> </td>
			<td><a href="?p=tabla&a=1&id=<?php echo $key[0]?>">editar</a></td>
			<td><a href="?p=tabla&a=2&id=<?php echo $key[0]?>">borrar</a></td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>

