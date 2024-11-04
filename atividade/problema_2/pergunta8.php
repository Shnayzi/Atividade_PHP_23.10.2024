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
		if ($_SESSION['resposta'] == 1) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];
	 ?>

	 <form action="pergunta9.php" method="post">
		
			<p>Qual o melhor personagem de sonic?</p>
			<span>1- Sonic</span>
			<span>2- Tails</span>
			<span>3- Silver</span>
			<span>4- Shadow</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>