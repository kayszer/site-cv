<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?php echo $experience->societe; ?></title>
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>
	<h1><?php echo $experience->societe; ?></h1>

	<div>
		<span>Societe :</span>
		<?php echo $experience->societe; ?>
	</div>
	<div>
		<span>Ville :</span>
		<?php echo $experience->ville; ?>
	</div>
	<div>
		<span>Emploi :</span>
		<?php echo $experience->emploi; ?>
	</div>
	<div>
		<span>Date de debut :</span>
		<?php echo $experience->date_debut; ?>
	</div>
	<div>
		<span>Date de fin :</span>
		<?php echo $experience->date_fin; ?>
	</div>
	<div>
		<span>Tache :</span>
		<?php echo $experience->tache; ?>
	</div>

	<hr>
	<hr>

	<?php foreach ($experience as $indice => $valeur) : ?>
		<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
	<?php endforeach; ?>

</body>

</html>
