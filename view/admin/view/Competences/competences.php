<?php require_once('inc/header.inc.php'); ?>

<div class="competence">

  <br>
  <h3>Competences</h3>
  <br>


  <div><a href="../../index.php?opC=new">Ajouter une nouvelle competences</a></div>
  <table class="competences">
    <thead>
      <tr>
        <th>Nom competences</th>
        <th>Note</th>
        <th colspan="2">&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($competences as $competence) :  ?>
        <tr>
          <td>
            <a href="index.php?opC=show&id=<?php echo $competence->id_competence; ?>">
              <?php echo htmlentities($competence->nom);  ?>
            </a>
          </td>
          <td><?php echo htmlentities($competence->note);  ?></td>
          <td>
            <a href="index.php?opC=delete&id=<?php echo $competence->id_competence; ?>">
              Supprimer
            </a>

          </td>
          <td>
            <a href="index.php?opC=update&id=<?php echo $competence->id_competence; ?>">
              Modifier
            </a>

          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</div>
