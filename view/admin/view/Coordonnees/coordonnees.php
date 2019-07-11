<?php require_once('inc/header.inc.php'); ?>


<div class="coordonnee">



  <br>
  <h3>Coordonnees</h3>
  <br>

  <div><a href="../../index.php?opCo=newC">Ajouter une nouvelle competences</a></div>
  <br>

  <table class="coordonnees">
    <thead>
      <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date de nissancea</th>
        <th>Adrssee</th>
        <th>Code postal</th>
        <th>Ville</th>
        <th>Email</th>
        <th>Téléphone</th>




        <th colspan="2">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($coordonnees as $coordonnee) :  ?>
        <tr>

          <td><?php echo htmlentities($coordonnee->nom);  ?></td>
          <td><?php echo htmlentities($coordonnee->prenom);  ?></td>
          <td><?php echo htmlentities($coordonnee->naissance);  ?></td>
          <td><?php echo htmlentities($coordonnee->adresse);  ?></td>
          <td><?php echo htmlentities($coordonnee->cp);  ?></td>
          <td><?php echo htmlentities($coordonnee->ville);  ?></td>
          <td><?php echo htmlentities($coordonnee->email);  ?></td>
          <td><?php echo htmlentities($coordonnee->telephone);  ?></td>
          <td>
            <a href="../../index.php?opCo=update&id=<?php echo $coordonnee->id_coordonnee; ?>">
              Modifier
            </a>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
