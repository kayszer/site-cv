<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Update Coordonnees</title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>

	<form method="POST" action="">
		<label for="nom">Nom :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $coordonnees->nom ?>"><br>

		<label for="prenom">Prenom :</label><br>
		<input type="text" name="prenom" id="prenom" value="<?= $coordonnees->prenom ?>"><br>

		<label for="naissance">Date de naissance :</label><br>
		<input type="text" name="naissance" id="naissance" value="<?= $coordonnees->naissance ?>"><br>

		<label for="adresse">Adresse :</label><br>
		<input type="text" name="adresse" id="adresse" value="<?= $coordonnees->adresse ?>"><br>

		<label for="email">Code Postal :</label><br>
		<input type="text" name="cp" id="cp" value="<?= $coordonnees->cp ?>"><br>

		<label for="telephone">Ville :</label><br>
		<input type="text" name="ville" id="ville" value="<?= $coordonnees->ville ?>"><br>

		<label for="email">Email :</label><br>
		<input type="text" name="email" id="email" value="<?= $coordonnees->email ?>"><br>

		<label for="telephone">Téléphone :</label><br>
		<input type="text" name="telephone" id="telephone" value="<?= $coordonnees->telephone ?>"><br>

		<input type="submit" value="Ajouter">
	</form>

</body>
