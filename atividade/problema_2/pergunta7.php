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
		
			<p>Qual jogo merece o Game Of The Year de 2024?</p>
			<span>1- Black Myth Wukong</span>
			<span>2- Dragon Ball Sparking Zero</span>
			<span>3- Enigma do Medo</span>
			<span>4- Fnaf Into the Pit</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>