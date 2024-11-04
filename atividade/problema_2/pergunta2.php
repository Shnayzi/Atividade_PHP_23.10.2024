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
		$_SESSION["nome"] = $_POST["nome"];
		$_SESSION["pontuacao"] = 0;
		$_SESSION["resposta"] = $_POST["resposta"];
		if ($_SESSION['resposta'] == 2) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];

	 ?>

	 <form action="pergunta3.php" method="post">
		
			<p>Qual é o melhor jogador?</p>
			<span>1- Gabigol</span>
			<span>2- Calleri</span>
			<span>3- Raphael Veiga</span>
			<span>4- Yuri Alberto</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>

</body>
</html>