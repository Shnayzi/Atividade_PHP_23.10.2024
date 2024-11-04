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
		$_SESSION["pontuacao"] = 0;
		$_SESSION["resposta"] = $_POST["resposta"];
		if ($_SESSION['resposta'] == 2) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];

	 ?>

	 <form action="pergunta3.php" method="post">
		
			<p>Qual o sentido da vida?</p>
			<span>1- Ser feliz</span>
			<span>2- Pegar mulher</span>
			<span>3- Alcançar seus objetivos</span>
			<span>4- Sei lá</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>

</body>
</html>