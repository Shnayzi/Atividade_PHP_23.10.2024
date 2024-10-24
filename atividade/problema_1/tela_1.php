<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	
</head>
<body>
	<h3>Form 1</h3>
	<form action="tela_2.php" method="post">
		
		<label for="name">Nome:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label for="idade">Idade:</label>
		<input type="number" name="idade" id="idade">
		<br><br>
		<label for="peso">Peso:</label>
		<input type="text" name="peso" id="peso">
		<br><br>
		<label for="altura">Altura:</label>
		<input type="text" name="altura" id="altura">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">		
	</form>
</body>
</html>