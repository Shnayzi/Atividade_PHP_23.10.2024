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

	 <form action="pergunta10.php" method="post">
		
			<p>Quanto é mais 1+1?</p>
			<span>1- 3</span>
			<span>2- 2</span>
			<span>3- 2!</span>
			<span>4- 11</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>