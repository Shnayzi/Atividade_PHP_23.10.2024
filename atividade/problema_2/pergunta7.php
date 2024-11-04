<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		session_start();
		$_SESSION["resposta"] = $_POST["resposta"];
		if ($_SESSION['resposta'] == 2) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];
	 ?>

	 <form action="pergunta8.php" method="post">
		
			<p>Que cor é o céu?</p>
			<span>1- Preto</span>
			<span>2- Azul</span>
			<span>3- Vermelho</span>
			<span>4- Rosa</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>