<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<form method="post" action="">
	<p>	
		<label>Nombre:</label>
		<input type="text" name="nombre">
	</p>
	<p>
		<label>Direccion:</label>
		<input type="text" name="direccion">
	</p>
	<input type="submit" value="enviar">
	</form>
<?php
if ($_POST){
	$nom=$_POST['nombre'];
	$dic=$_POST['direccion'];

	echo "Tu Nombre es"." ". $nom;
	echo "Tu direccion es"." ".$dic;
}

?>
</body>
</html>
