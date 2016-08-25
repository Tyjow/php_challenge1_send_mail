<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<title>PHP_Challenge 1</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="email">
		<h1>Formulaire d'envoi de mail en PHP</h1>
		<br><br><br>
		<form method="post">
			<label>E-mail : </label>
				<input type="text" name="mail" placeholder="Votre-adresse@email.com" />
				<br>
			<label>Objet : </label>
				<input type="text" name="obj" placeholder="Sujet" />
				<br><br>
			<label>Saisie de texte: <br>Taille maximum : 500</label>
				<br>
				<textarea name="msg" rows="8" cols="50" maxlength="500" placeholder="Entrez votre message"></textarea>
				<br><br>
				<input type="file" accept="image/*" name="file">
				<br>
				<?php include("data.php"); ?>
				<input type="submit" value="Envoyez"/>
		</form>
	</div>

</body>
<script type="text/javascript" src="js/jquery-3.1.0.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</html>