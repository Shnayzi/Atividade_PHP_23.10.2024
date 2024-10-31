<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
	<style type="text/css">
		body{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.name{
			display: flex;
			justify-content: center;
			align-items: center;
		}
		input{
			display: inline;
			justify-content: center; 	 	
			align-items: center;
		}
	</style>
</head>
<body>
	
	<form action="pergunta1.php" method="post">
		
		<label for="name">Nome:</label>
		<input type="text" name="name" id="name">
		<br><br>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar">		
	</form>
</body>
</html>