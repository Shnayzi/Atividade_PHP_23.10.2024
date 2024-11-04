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
		if ($_SESSION['resposta'] == 4) {
			$_SESSION["pontuacao"]++;
		}

		echo $_SESSION["pontuacao"];
	 ?>

	 <form action="pergunta6.php" method="post">
		
			<p>Qual comando é responsável por fechar um aplicativo e desligar o computador?</p>
			<span>1- Alt + F4</span>
			<span>2- Ctrl + Shift + Esc</span>
			<span>3- Ctrl + C</span>
			<span>4- Windows + L</span>
			<br>
			<input type="number" name="resposta" id="resposta">
			<input type="submit" name="Enviar" value="Enviar">

		</form>
</body>
</html>