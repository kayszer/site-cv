<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Update Eperiences</title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>

	<form method="POST" action="">
		<label for="societe">Societe :</label><br>
		<input type="text" name="societe" id="societe" value="<?= $experiences->societe ?>"><br>

		<label for="ville">Ville :</label><br>
		<input type="text" name="ville" id="ville" value="<?= $experiences->ville ?>"><br>

		<label for="emploi">Emploi :</label><br>
		<input type="text" name="emploi" id="emploi" value="<?= $experiences->emploi ?>"><br>

		<label for="date_debut">date_debut :</label><br>
		<input type="text" name="date_debut" id="date_debut" value="<?= $experiences->date_debut ?>"><br>

		<label for="date_fin">Date de fin :</label><br>
		<input type="text" name="date_fin" id="date_fin" value="<?= $experiences->date_fin ?>"><br>

		<label for="tache">tache :</label><br>
		<input type="textarea" name="tache" id="tache" value="<?= $experiences->tache ?>"><br>

		<input type="submit" value="Ajouter">
	</form>

</body>

</html>
