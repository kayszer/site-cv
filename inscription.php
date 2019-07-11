<?php require_once('inc/header.inc.php');
ob_start(); ?>

<?php

if (userConnect()) { // si l'internaute est connecté

    header('location:index.php');
    exit();
}



if ($_POST) { // Si on clique sur le bouton 'submit'

    // debug($_POST);

    //Déclaration d'un variable :
    $erreur = '';

    if (strlen($_POST['username']) <= 3 || strlen($_POST['username']) >= 20) { //Si le username est inférieur ou égal à 3 OU qu'il est supérieur ou égal à 20

        $erreur .="<script>alert(\"username indisponible\")</script>";
    }

    // Test si le username est disponible, si le username renvoie au moins 1 résultat, c'est que le username est déjà attribué

    $r = execute_requete("SELECT * FROM membre WHERE username = '$_POST[username]'");

    if ($r->rowCount() >= 1) {

        $erreur .= "<script>alert(\"username indisponible\")</script>";
    }


    // Boucle sur les saisies afin de les passer dans la fonction addslaches()
    foreach ($_POST as $key => $value) {
        $_POST[$key] = addslashes($value);
    }

    // Cryptage du mot de passe :
    // $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($erreur)) { // si ma variable $erreur est vide

        execute_requete("INSERT INTO membre(username, password) VALUES('$_POST[username]','$_POST[password]')");

        echo "<script>alert(\"Inscritpion validé\")</script>";
    }
    // Affichage des erreurs :
    $content .= $erreur;
}

//----------------------------------------------------------------------------//
?>
<div class="log-admin">
    <h1>INSCRIPTION</h1>

    <?= $content ?>

    <form method="post">

        <label for="username">Pseudo Admin</label><br>
        <input type="text" name="username" id="username" class="form-control"><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="text" name="password" id="password" class="form-control"><br><br>

        <input type="submit" class="btn btn-secondary" value="s'inscrire">
    </form>
</div>



<?php require_once('inc/footer.inc.php'); ?>
