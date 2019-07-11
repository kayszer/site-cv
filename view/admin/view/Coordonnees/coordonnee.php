<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="view/admin/css/style.css">
</head>

<body>

	<div>
		<span><i class="mdi mdi-note-multiple-outline"></i> :</span>
		<?php echo $coordonnee->nom; ?>
	</div>
	<div>
		<span>Prenom :</span>
		<?php echo $coordonnee->prenom; ?>
	</div>
	<div>
		<span>Date de naissance :</span>
		<?php echo $coordonnee->naissance; ?>
	</div>
	<div>
		<span>Adresse :</span>
		<?php echo $coordonnee->adresse; ?>
	</div>
	<div>
		<span>Code Postal :</span>
		<?php echo $coordonnee->cp; ?>
	</div>
	<div>
		<span>Ville :</span>
		<?php echo $coordonnee->ville; ?>
	</div>
	<div>
		<span>Email :</span>
		<?php echo $coordonnee->email; ?>
	</div>
	<div>
		<span>téléphone :</span>
		<?php echo $coordonnee->telephone; ?>
	</div>

	<hr>
	<hr>

	<?php foreach ($coordonnee as $indice => $valeur) : ?>
		<div><span><?= ucfirst($indice) ?></span> - <span><?= $valeur ?></span></div>
	<?php endforeach; ?>

</body>

</html>
