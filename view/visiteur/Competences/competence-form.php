<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo htmlentities($title); ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<form method="POST" action="">
		<label for="html">HTLM 5 :</label><br>
		<input type="text" name="html" id="html" value="<?= $html ?>"><br>

		<label for="css">CSS 3 :</label><br>
		<input type="text" name="css" id="css" value="<?= $css ?>"><br>

		<label for="js">JS :</label><br>
		<input type="text" name="js" id="js" value="<?= $js ?>"><br>

		<label for="wordpress">WORDPRESS :</label><br>
		<input type="text" name="wordpress" id="wordpress" value="<?= $wordpress ?>"><br>

		<label for="bootstrap">BOOTSTRAP :</label><br>
		<input type="text" name="bootstrap" id="bootstrap" value="<?= $bootstrap ?>"><br>

		<input type="submit" value="Ajouter">
	</form>
</body>

</html>
