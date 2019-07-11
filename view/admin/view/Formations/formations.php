<?php require_once('inc/header.inc.php'); ?>

<div class="formation">

  <br>
  <h3>Formations</h3>


  <div><a href="../../index.php?opF=new">Ajouter une nouvelle formation</a></div><br>

  <table class="formations">
    <thead>
      <tr>
        <th>Ecole</th>
        <th>Ville</th>
        <th>Formation</th>
        <th>Date debut</th>
        <th>Date fin</th>
        <th>Obtenue</th>




        <th colspan="2">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($formations as $formation) :  ?>
        <tr>

          <td><?php echo htmlentities($formation->ecole);  ?></td>
          <td><?php echo htmlentities($formation->ville);  ?></td>
          <td><?php echo htmlentities($formation->formation);  ?></td>
          <td><?php echo htmlentities($formation->date_debut);  ?></td>
          <td><?php echo htmlentities($formation->date_fin);  ?></td>
          <td><?php echo htmlentities($formation->obtenue);  ?></td>
          <td>
            <a href="../../index.php?opF=update&id=<?php echo $formation->id_formation; ?>">
              Modifier
            </a>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
