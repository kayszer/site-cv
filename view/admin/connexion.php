<?php require_once('inc/header.inc.php');

// Deconnection
if (isset($_GET['action']) && $_GET['action'] == 'deconnexion') {

    // si il y a une 'action' dans l'URL et que celle-ci est égale à 'deconnexion', alors on détruit la session

    session_destroy();
    header('location:index.php');
    exit();
}


if (userConnect()) { // si l'internaute est connecté redirection vers la page admin


    header("location: view/admin/admin.php");
    exit();
}


if ($_POST) { // si on a cliquez sur le bouton submit

    $r = execute_requete("SELECT * FROM membre WHERE username = '$_POST[username]'");
    // si il y a une correspondance d'un username dans la table 'member', $r renverra '1' ligne de résultat

    if ($r->rowCount() >= 1) {

        $membre = $r->fetch(PDO::FETCH_ASSOC);
        debug($membre);
        // debug($_POST);

        //Vérification de mon mot de passe : si le mot de passe est correct, on renseigne des informations dans notre fichier de session

        if ($_POST['password'] == $membre['password']) {

            $_SESSION['membre']['id_membre'] = $membre['id_membre'];
            $_SESSION['membre']['username'] = $membre['username'];
            $_SESSION['membre']['password'] = $membre['password'];

            $content .= "<script>
    alert(\"Bienvenue Kayes\")
</script>";;

            // Redirection vers la page index :
            header('location:view/admin/admin.php');
            ob_end_flush();
            // } else {
            // $content .= '<div class="alert alert-danger" role="alert">Erreur mot de passe</div>';
        }
    } else {
        $content .= "<script>
    alert(\"Mauvais username\")
</script>";
    }
}


//---------------------------------------------------------------//
?>

<?= $content ?>

<div class="connexion">
    <h1>CONNEXION</h1>

    <?= $content ?>

    <form method="post">

        <label for="username">Pseudo</label><br>
        <input type="text" name="username" id="username" class="form-control" placeholder="Votre username"><br><br>

        <label for="password">Mot de passe</label><br>
        <input type="text" name="password" id="password" class="form-control" placeholder="Votre mot de passe"><br><br>

        <input type="submit" class="btn btn-secondary" value="Se connecter">
    </form>

</div>

<?php require_once('inc/footer.inc.php'); ?>
