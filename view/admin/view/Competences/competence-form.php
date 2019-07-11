<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($title); ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<form method="POST" action="">
		<label for="nom">Nom compétence :</label><br>
		<input type="text" name="nom" id="nom" value="<?= $nom ?>"><br>

		<label for="note">Note :</label><br>
		<input type="text" name="note" id="note" value="<?= $note ?>"><br>

		<input type="submit" value="Ajouter">
	</form>
</body>

</html>
