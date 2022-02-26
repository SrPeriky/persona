<?php require_once('funciones/get_tip.php'); ?>

<h2>Nueva persona</h2>
<form action="funciones/save_persona.php" method="post">
	<label>Nombre </label> <input type="text" name="nom"> <br>
	<label>Apellido </label> <input type="text" name="ape"> <br>
	<label>Documento </label> <select name="tip">
		<?php foreach($tipo AS $t): ?>
		<option value="<?php echo $t[0]; ?>"> <?php echo $t[1]; ?> </option>
		<?php endforeach;?>
	</select> <br>
	<label>Numero de documento </label> <input type="number" name="num"> <br>
	<input type="submit" value="Guardar">
</form>
