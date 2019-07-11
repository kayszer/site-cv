<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($title); ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<form method="POST" action="">
		<label for="nom">Nom :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $nom ?>"><br>

		<label for="prenom">Prenom :</label><br>
		<input type="text" name="prenom" id="prenom" value="<?= $prenom ?>"><br>

		<label for="naissance">Date de naissance :</label><br>
		<input type="text" name="naissance" id="naissance" value="<?= $naissance ?>"><br>

		<label for="adresse">Adresse :</label><br>
		<input type="text" name="adresse" id="adresse" value="<?= $adresse ?>"><br>

		<label for="cp">Code Postal :</label><br>
		<input type="text" name="cp" id="cp" value="<?= $cp ?>"><br>

		<label for="ville">Ville :</label><br>
		<input type="text" name="ville" id="ville" value="<?= $ville ?>"><br>

		<label for="email">Email :</label><br>
		<input type="text" name="email" id="email" value="<?= $email ?>"><br>

		<label for="telephone">Telephone :</label><br>
		<input type="text" name="telephone" id="telephone" value="<?= $telephone ?>"><br>


		<input type="submit" value="Ajouter">
	</form>
</body>

</html>
