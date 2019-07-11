<?php
ob_start();
//----------------------------------------------------------------------//
//session_start() se positionne toujours en haut et en premier avant les traitements php
session_start();

//----------------------------------------------------------------------//
// Connexion à la bdd:
$pdo = new PDO('mysql:host=localhost;dbname=id10174815_site_cv', 'id10174815_kayes', 'R3@lm@drid93380', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8'));

// var_dump($pdo);


//----------------------------------------------------------------------//
//Definition d'une constante
define('URL', 'http://files.000webhost.com/');

//----------------------------------------------------------------------//
//Déclaration d'une variable :
$content = '';

//----------------------------------------------------------------------//
require_once('fonction.inc.php');
