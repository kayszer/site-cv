<?php include 'inc/header.inc.php' ?>

<!-- about section
   ================================================== -->
<section id="about">

  <div class="row section-intro">
    <div class="col-twelve">

      <h5>A propos de moi</h5>

      <div class="intro-info">

        <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/20664918_1891281724528459_4688020306659327902_n.jpg?_nc_cat=105&_nc_oc=AQnT4dWCufx_9gXBexzS146PQWr7O3eRtM_B9cH3OHP_Z1GlZzHXd6iEefUnbM4xxII&_nc_ht=scontent-cdg2-1.xx&oh=9ab8edc3666bd89012c5c53415fcbd20&oe=5DBE6C3A" alt="Profile Picture">

        <p class="lead">Je me nomme Kayes KASSAS, et j'ai 28 ans, suite à plusieurs experiences diverse et varié j'ai décider de reprendre mes études dans le domaines de l'informatique.</p>
      </div>

    </div>
  </div> <!-- /section-intro -->

  <div class="row about-content">

    <div class="col-six tab-full">

      <h3>Profil :</h3>
      <ul class="info-list">
        <li>
          <strong>Prenom Nom:</strong>
          <span>Kayes Kassas</span>
        </li>
        <li>
          <strong>Date de naissance:</strong>
          <span>15 Mai 1991</span>
        </li>
        <li>
          <strong>Metier:</strong>
          <span>Developpeur Web Junior </span>
        </li>
        <li>
          <strong>Website:</strong>
          <span>www.Kayes-Kassas.com</span>
        </li>
        <li>
          <strong>Email:</strong>
          <span>Kassas.kayes93@gmai.coml</span>
        </li>

      </ul> <!-- /info-list -->

    </div>

    <div class="col-six tab-full">

      <h3>Skills</h3>

      <ul class="skill-bars">
        <li>
          <div class="progress percent60"><span>60%</span></div>
          <strong>HTML5</strong>
        </li>
        <li>
          <div class="progress percent65"><span>65%</span></div>
          <strong>CSS3</strong>
        </li>
        <li>
          <div class="progress percent55"><span>55%</span></div>
          <strong>JS</strong>
        </li>
        <li>
          <div class="progress percent65"><span>65%</span></div>
          <strong>PHP</strong>
        </li>
        <li>

          <div class="progress percent50"><span>50%</span></div>
          <strong>Wordpress</strong>
        </li>

      </ul> <!-- /skill-bars -->

    </div>

  </div>

  <div class="row button-section">
    <div class="col-twelve">
      <a href="" download="../cv/Kassas-Kayes.pdf" title="Download CV" class="button button-primary">Telecharger CV</a>
    </div>
  </div>

</section> <!-- /process-->
<section id="resume" class="grey-section">


  <!-- resume Section
   ================================================== -->
  <section id="resume " class="grey-section">

    </div> <!-- /section-intro-->

    <div id="formation" class="row resume-timeline">

      <div class="col-twelve resume-header">

        <h2>Parcours scolaire et Formation</h2>

      </div> <!-- /resume-header -->

      <div class="col-twelve">

        <div class="timeline-wrap">

          <div class="timeline-block">
            <?php foreach ($formations as $formation) :  ?>

              <div class="timeline-ico">
                <i class="fa fa-graduation-cap"></i>
              </div>

              <div class="timeline-header">
                <h3>
                  <h3><?php echo htmlentities($formation->formation);  ?></h3>
                  <p><?php echo htmlentities($formation->date_debut);  ?> - <?php echo htmlentities($formation->date_fin);  ?></p>
              </div>

              <div class="timeline-content">
                <h4><?php echo htmlentities($formation->ecole);  ?></h4>
                <p>Obtenue : <?php echo htmlentities($formation->obtenue);  ?></p>
              </div>
            <?php endforeach; ?>
          </div> <!-- /timeline-block -->

        </div> <!-- /timeline-wrap -->

      </div> <!-- /col-twelve -->

    </div> <!-- /resume-timeline -->
