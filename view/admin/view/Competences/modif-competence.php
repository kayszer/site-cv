<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Update Eperiences</title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>

	<form method="POST" action="">
		<label for="html">HTML 5 :</label><br>
		<input type="text" name="html" id="html" value="<?= $experiences->html ?>"><br>

		<label for="css">CSS :</label><br>
		<input type="text" name="css" id="css" value="<?= $experiences->css ?>"><br>

		<label for="js">JS :</label><br>
		<input type="text" name="js" id="js" value="<?= $experiences->js ?>"><br>

		<label for="wordpress">WORDPRESS :</label><br>
		<input type="text" name="wordpress" id="wordpress" value="<?= $experiences->wordpress ?>"><br>

		<label for="bootstrap">BOOTSTRAP :</label><br>
		<input type="text" name="bootstrap" id="bootstrap" value="<?= $experiences->bootstrap ?>"><br>
		
		<input type="submit" value="Ajouter">
	</form>

</body>

</html>
