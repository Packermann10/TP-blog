<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<p>
			<?php
			if (isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message'])){
				$date = date("d-m-Y");
				$heure = date("H:i");
				Print("Date : le $date et il est $heure");
				echo '<br/>';
				echo '<br/>';
				echo 'Titre : '.htmlspecialchars($_POST['titre']);
				echo '<br/>';
				echo '<br/>';
				echo 'Pseudo : '.htmlspecialchars($_POST['pseudo']);
				echo '<br/>';
				echo '<br/>';
				echo 'Message : '.htmlspecialchars($_POST['message']);
				echo '<br/>';
				echo '<br/>';
			}else{
				echo 'Il faut renseigner tous les paramètres requis pour publier votre message';
			}
			?>
		</p>
	</body>
</html>