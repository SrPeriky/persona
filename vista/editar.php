<?php require_once('funciones/get_tip.php'); require_once('funciones/get_persona.php');
$id = '';
$nom = '';
$ape = '';
$doc = '';
$num = '';
if($persona != null){
	$id = $persona[0][0];
	$nom = $persona[0][4];
	$ape = $persona[0][5];
	$doc = $persona[0][1];
	$num = $persona[0][3];
}
 ?>

<h2>Editar persona</h2>
<form action="funciones/set_persona.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id ?>">
	<label>Nombre </label> <input value="<?php echo $nom ?>" type="text" name="nom"> <br>
	<label>Apellido </label> <input value="<?php echo $ape ?>" type="text" name="ape"> <br>
	<label>Documento </label> <select name="tip">
		<?php foreach($tipo AS $t): ?>
		<option<?php if ($doc == $t[1]) echo " selected ";?> value="<?php echo $t[0]; ?>" > <?php echo $t[1]; ?> </option>
		<?php endforeach;?>
	</select> <br>
	<label>Numero de documento </label> <input value="<?php echo $num ?>" type="number" name="num"> <br>
	<input type="submit" value="Guardar">
</form>
