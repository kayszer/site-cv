<?php require_once('inc/header.inc.php'); ?>

<div class="experience">


	<br>
	<h3>Experiences</h3>

	<div><a href="../../index.php?opE=new">Ajouter une nouvelle société</a></div><br>
	<table class="experiences">
		<thead>
			<tr>
				<th>Société</th>
				<th>Ville</th>
				<th>Emploi</th>
				<th>Tache</th>
				<th>Date de debut</th>
				<th>Date de fin</th>




				<th colspan="2">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($experiences as $experience) :  ?>
				<tr>

					<td><?php echo htmlentities($experience->societe);  ?></td>
					<td><?php echo htmlentities($experience->ville);  ?></td>
					<td><?php echo htmlentities($experience->emploi);  ?></td>
					<td><?php echo htmlentities($experience->tache);  ?></td>
					<td><?php echo htmlentities($experience->date_debut);  ?></td>
					<td><?php echo htmlentities($experience->date_fin);  ?></td>
					<td>
						<a href="../../index.php?opE=update&id=<?php echo $experience->id_experience; ?>">
							Modifier
						</a>
					</td>

				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</div>
