<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>PHP_Challenge 1</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div>
		<h1>PHP Challenge 1</h1>
		<br>
		<form method="post">
			<label>Adresse e-mail: </label>
				<input type="text" name="mail" placeholder="Votre-adresse@email.com" />
				<br>
			<label>Objet : </label>
				<input type="text" name="obj" placeholder="Sujet" />
				<br><br>
			<label>Saisie de texte: </label>
				<br>
				<textarea name="msg" placeholder="Entrez votre message"></textarea>
				<br><br>
				<?php include("data.php"); ?>
				<input type="submit" value="Envoyez"/>
		</form>
	</div>

</body>
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>