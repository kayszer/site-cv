<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>

	<div>
		<span>HTML 5 :</span>
		<?php echo $competence->societe; ?>
	</div>
	<div>
		<span>CSS :</span>
		<?php echo $competence->css; ?>
	</div>
	<div>
		<span>JS :</span>
		<?php echo $competence->js; ?>
	</div>
	<div>
		<span>Date de debut :</span>
		<?php echo $competence->date_debut; ?>
	</div>
	<div>
		<span>Date de fin :</span>
		<?php echo $competence->date_fin; ?>
	</div>
	<div>
		<span>Tache :</span>
		<?php echo $competence->tache; ?>
	</div>

	<hr>
	<hr>

	<?php foreach ($competence as $indice => $valeur) : ?>
		<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
	<?php endforeach; ?>

</body>

</html>
