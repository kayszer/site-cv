<?php

require_once 'Autoload.php';

// Formation

$controller = new controller\formationController;

$controller->handleRequest();

// Experince

$controller = new controller\experienceController;

$controller->handleRequest();

// // Competence

// $controller = new controller\competenceController;

// $controller->handleRequest();

// // Coordonnee

// $controller = new controller\coordonneController;

// $controller->handleRequest();
