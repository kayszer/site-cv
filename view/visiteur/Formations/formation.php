<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo $formation->ecole; ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<h1><?php echo $formation->ecole; ?></h1>

	<div>
		<span>Ecole :</span>
		<?php echo $formation->ecole; ?>
	</div>
	<div>
		<span>Ville :</span>
		<?php echo $formation->ville; ?>
	</div>
	<div>
		<span>Formation :</span>
		<?php echo $formation->formation; ?>
	</div>
	<div>
		<span>Date de debut :</span>
		<?php echo $formation->date_debut; ?>
	</div>
	<div>
		<span>Date de fin :</span>
		<?php echo $formation->date_fin; ?>
	</div>
	<div>
		<span>Obtenue :</span>
		<?php echo $formation->obtenue; ?>
	</div>

	<hr>
	<hr>

	<?php foreach ($formation as $indice => $valeur) : ?>
		<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
	<?php endforeach; ?>

</body>

</html>
