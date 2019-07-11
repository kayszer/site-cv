<!-- Experiences Visiteurs -->
<div id="experience" class="row resume-timeline">

	<div class="row resume-timeline">

		<div class="col-twelve resume-header">
			<h2>Experience Professionnelle</h2>

		</div> <!-- /resume-header -->

		<div class="col-twelve">

			<div class="timeline-wrap">

				<div class="timeline-block">
					<?php foreach ($experiences as $experience) :  ?>

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>

						<div class="timeline-header">
							<h3><?php echo htmlentities($experience->emploi);  ?></h3>
							<p><?php echo htmlentities($experience->date_debut);  ?> - <?php echo htmlentities($experience->date_fin);  ?></p>
						</div>

						<div class="timeline-content">
							<h4><?php echo htmlentities($experience->societe);  ?></h4>
							<p>Tache : <?php echo htmlentities($experience->tache);  ?></p>
						</div>
					<?php endforeach; ?>
				</div> <!-- /timeline-block -->

			</div> <!-- /timeline-wrap -->

		</div> <!-- /col-twelve -->

	</div> <!-- /resume-timeline -->
</div>

</section> <!-- /features -->


<?php include 'inc/footer-complet.php' ?>
