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

	 <form action="pergunta7.php" method="post">
		
			<p>Qual carta é a mais odiada do Clash Royale?</p>
			<span>1- Spark</span>
			<span>2- Mega Cavaleiro</span>
			<span>3- Pekka</span>
			<span>4- Mini Pekka quando foca na torre</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>