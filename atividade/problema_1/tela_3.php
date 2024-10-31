<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comparação</title>
	<?php
		session_start();
		$_SESSION["name2"] = $_POST["name2"];
		$_SESSION["idade2"] = $_POST["idade2"];
		$_SESSION["peso2"] = $_POST["peso2"];
		$_SESSION["altura2"] = $_POST["altura2"];

		if ($_SESSION["idade"] > $_SESSION["idade2"]) {
			echo "O mais velho é " . $_SESSION["name"] . "<br><br>";
		} else {
			echo "O mais velho é " . $_SESSION["name2"] . "<br><br>";
		}

		if ($_SESSION["altura"] > $_SESSION["altura2"]) {
			echo "O mais alto é " . $_SESSION["name"] . "<br><br>" ;
		} else {
			echo "O mais alto é " . $_SESSION["name2"] . "<br><br>";
		}

		if ($_SESSION["peso"] > $_SESSION["peso2"]) {
			echo "O mais pesado é " . $_SESSION["name"] . "<br><br>";
		} else {
			echo "O mais pesado é " . $_SESSION["name2"] . "<br><br>" ;
		}
	?>
</head>
<body>
	<h1></h1>
</body>
</html>