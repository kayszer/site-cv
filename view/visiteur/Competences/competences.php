<br>
<div class="admin-ex"><a href=admin.php?op=new">Ajouter une nouvelle competence</a></div><br>

<table class="competences">
  <thead>
    <tr>
      <th>HTML 5</th>
      <th>CSS 3</th>
      <th>JS</th>
      <th>WORDPRESS</th>
      <th>BOOTSTRAP</th>

      <th colspan="2">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ( $competences as $competence) :  ?>
      <tr>
        <td><?php echo htmlentities($competence->html);  ?></td>
        <td><?php echo htmlentities($competence->css);  ?></td>
        <td><?php echo htmlentities($competence->js);  ?></td>
        <td><?php echo htmlentities($competence->wordpress);  ?></td>
        <td><?php echo htmlentities($competence->boostrap);  ?></td>
        <td>
          <a href="admin.php?op=update&id=<?php echo $competence->id_competence; ?>">
            update
          </a>

        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
