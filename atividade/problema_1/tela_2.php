<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<?php
		session_start();
		$_SESSION["name"] = $_POST["name"];
		$_SESSION["idade"] = $_POST["idade"];
		$_SESSION["peso"] = $_POST["peso"];
		$_SESSION["altura"] = $_POST["altura"];
	?>
</head>
<body>
	<h3>Form 2</h3>
	<form action="tela_3.php" method="post">
		
		<label for="name">Nome:</label>
		<input type="text" name="name2" id="name2">
		<br><br>
		<label for="idade">Idade:</label>
		<input type="number" name="idade2" id="idade2">
		<br><br>
		<label for="peso">Peso:</label>
		<input type="text" name="peso2" id="peso2">
		<br><br>
		<label for="altura">Altura:</label>
		<input type="text" name="altura2" id="altura2">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">		
	</form>
</body>
</html>