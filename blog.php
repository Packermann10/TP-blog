<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Mon blog</title>
		<link rel="stylesheet" href="style.css">
		<script src="script.js"></script>
	</head>
	
	<body>
		<h1>Blog</h1>
			<p>
			<h2>Messages</h2>
			<?php include 'valide.php' ?>
			</p>
		<form action="blog.php" method="POST">
				<h2>Formulaire</h2>
				<label for="pseudo">Pseudo : </label><input type="text" name="pseudo" />
				<br/>
				<br/>
				<label for="titre">Titre : </label><input type="text" name="titre" />
				<br/>
				<br/>
				<label for="message">Message : </label><textarea name="message" rows="5" cols="40"></textarea>
				<br/>
				<br/>
				<input type="submit" value="Poster" />
			</p>
		</form>
	</body>
</html>