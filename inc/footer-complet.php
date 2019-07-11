<!-- stats Section
       ================================================== -->
<section id="stats" class="count-up">

  <div class="row">
    <div class="col-twelve">

      <div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-users"></i>
          </div>

          <h3 class="stat-count">
            11
          </h3>

          <h5 class="stat-title">
            Collégue de formation
          </h5>

        </div> <!-- /stat -->

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-badge"></i>
          </div>

          <h3 class="stat-count">
            5
          </h3>

          <h5 class="stat-title">
            Diplome Obtenue
          </h5>

        </div> <!-- /stat -->

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-light-bulb"></i>
          </div>

          <h3 class="stat-count">
            120
          </h3>

          <h5 class="stat-title">
            Idées futur
          </h5>

        </div> <!-- /stat -->

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-cup"></i>
          </div>

          <h3 class="stat-count">
            1500
          </h3>

          <h5 class="stat-title">
            Café pris
          </h5>

        </div> <!-- /stat -->

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-pencil-ruler"></i>
          </div>

          <h3 class="stat-count">
            143
          </h3>

          <h5 class="stat-title">
            Jours de cours
          </h5>

        </div> <!-- /stat -->

        <div class="bgrid stat">

          <div class="icon-part">
            <i class="icon-clock"></i>
          </div>

          <h3 class="stat-count">
            1001
          </h3>

          <h5 class="stat-title">
            Heures de cours
          </h5>

        </div> <!-- /stat -->

      </div> <!-- /stats-list -->

    </div> <!-- /twelve -->
  </div> <!-- /row -->

</section> <!-- /stats -->


<!-- contact
       ================================================== -->
<section id="contact">

  <div class="row section-intro">
    <div class="col-twelve">

      <h5>Contact</h5>

      <p class="lead">N'hesitez pas à me contacter pour plus d'inforamtion</p>

    </div>
  </div> <!-- /section-intro -->


  <div class="row contact-form">

    <div class="col-twelve">

      <!-- form -->
      <form name="contactForm" id="contactForm" method="post" action="contact.php">
        <fieldset>

          <div class="form-field">
            <input name="contactName" type="text" id="contactName" placeholder="Nom" value="" minlength="2" required="">
          </div>
          <div class="form-field">
            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
          </div>
          <div class="form-field">
            <input name="contactSubject" type="text" id="contactSubject" placeholder="Objet" value="">
          </div>
          <div class="form-field">
            <textarea name="contactMessage" id="contactMessage" placeholder="Messages" rows="10" cols="50" required=""></textarea>
          </div>
          <div class="form-field">
            <button class="submitform" name="envoi-message">Envoyez</button>
            <div id="submit-loader">
              <div class="text-loader">Envoie en cours...</div>
              <div class="s-loader">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
              </div>
            </div>
          </div>

        </fieldset>
      </form> <!-- Form End -->

      <!-- contact-warning -->
      <div id="message-warning">
      </div>
      <!-- contact-success -->
      <div id="message-success">
        <i class="fa fa-check"></i>Votre message à était envoyé, je vous en remercie <br>
      </div>

    </div> <!-- /col-twelve -->

  </div> <!-- /contact-form -->

  <div class="row contact-info">

    <div class="col-four tab-full">

      <div class="icon">
        <i class="icon-pin"></i>
      </div>

      <h5>Où me trouvez</h5>

      <p>
        52 - 64 avenue général gallieni<br><br>
        Pierrefitte-sur-seine<br><br>
        93380
      </p>

    </div>

    <div class="col-four tab-full collapse">

      <div class="icon">
        <i class="icon-mail"></i>
      </div>

      <h5>Email</h5>

      <p>kayes.kassas@live.fr<br><br>
        kassas.kayes93@gmail.com
      </p>

    </div>

    <div class="col-four tab-full">

      <div class="icon">
        <i class="icon-phone"></i>
      </div>

      <h5>Numéro de téléphone</h5>

      <p><br><br>
        Mobile: 07 63 97 25 43<br>
      </p>

    </div>

  </div> <!-- /contact-info -->

</section> <!-- /contact -->


<!-- footer
             ================================================== -->

<footer>
  <div class="row">

    <div class="col-six tab-full pull-right social">

      <ul class="footer-social">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>

    </div>

    <div id="go-top">
      <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
    </div>

  </div> <!-- /row -->
</footer>

<div id="preloader">
  <div id="loader"></div>
</div>

<!-- Java Script
             ================================================== -->
<script src="view/visiteur/js/jquery-2.1.3.min.js"></script>
<script src="view/visiteur/js/plugins.js"></script>
<script src="view/visiteur/js/main.js"></script>

</body>

</html>
