<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($title); ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<form method="POST" action="">
		<label for="ecole">Ecole :</label><br>
		<input type="text" name="ecole" id="ecole" value="<?= $ecole ?>"><br>

		<label for="ville">Ville :</label><br>
		<input type="text" name="ville" id="ville" value="<?= $ville ?>"><br>

		<label for="formation">Formation :</label><br>
		<input type="text" name="formation" id="formation" value="<?= $formation ?>"><br>

		<label for="date_debut">Date de debut :</label><br>
		<input type="text" name="date_debut" id="date_debut" value="<?= $date_debut ?>"><br>

		<label for="date_fin">Date de fin :</label><br>
		<input type="text" name="date_fin" id="date_fin" value="<?= $date_fin ?>"><br>

		<label for="obtenue">Obtenue :</label><br>
		<input type="text" name="obtenue" id="obtenue" value="<?= $obtenue ?>"><br>

		<input type="submit" value="Ajouter">
	</form>
</body>

</html>
