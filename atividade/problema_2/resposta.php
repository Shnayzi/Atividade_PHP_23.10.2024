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
	 ?>
</body>
</html>