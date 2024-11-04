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
		if ($_SESSION['resposta'] == 3) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];
	 ?>

	 <form action="pergunta4.php" method="post">
		
			<p>Qual pokémon é conhecido por ser amarelo e parecer um rato?</p>
			<span>1- Pikachu</span>
			<span>2- Pichu</span>
			<span>3- Raichu</span>
			<span>4- Mewtwo</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>

</body>
</html>