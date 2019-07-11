<?php

namespace controller;

class formationController
{

  private $db;
  public function __construct()
  {

    $e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

    $this->db = new \model\EntityRepositoryF;
  }
  //-------------------------------------------------
  public function redirect($location)
  {

    header('Location: ' . $location);
  }

  //-------------------------------------------------
  public function handleRequest()
  {

    $op = isset($_GET['op']) ? $_GET['op'] : NULL;

    try {
      if (!$op || $op == 'list') {
        $this->listFormations();
      } elseif ($op == 'new') {
        $this->saveFormation();
      } elseif ($op == 'delete') {
        $this->deleteFormation();
      } elseif ($op == 'show') {
        $this->showFormation();
      }

      //-------------------------------------------------

      elseif ($op == 'update') {
        $this->updateFormation();
      } else {
        $this->showError("Page not found", "Page for operation " . $op . " was not found.");
      }
    } catch (Exception $e) {

      $this->showError("Application error", $e->getMessage());
    }
  }
  //-------------------------------------------------
  public function listFormations()
  {

    $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

    $formations = $this->db->selectAll($orderby);

    include 'view/Formations/formations.php';
  }
  //-------------------------------------------------
  public function saveFormations()
  {

    $title = 'Add new formation';

    $ecole = '';
    $ville = '';
    $formation = '';
    $obtenue = '';
    $date_debut = '';
    $date_fin = '';

    if ($_POST) {

      $ecole = isset($_POST['ecole']) ? $_POST['ecole'] : NULL;
      $ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
      $formation = isset($_POST['formaton$formationo']) ? $_POST['formaon$formationio'] : NULL;
      $obtenue = isset($_POST['obtenue']) ? $_POST['obtenue'] : NULL;
      $date_debut = isset($_POST['date_debut']) ? $_POST['date_debut'] : NULL;
      $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : NULL;


      try {

        $res = $this->db->insert();
        $this->redirect('index.php');
        return;
      } catch (Exception $e) {
        echo 'erreur !!';
      }
    }
    include 'view/Formations/formation-form.php';
  }

  //-------------------------------------------------
  public function deleteFormation()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $res = $this->db->delete($id);

    $this->redirect('index.php');
  }

  //-------------------------------------------------
  public function showFormation()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $formation = $this->db->select($id);

    include 'view/Formations/formation.php';
  }

  public function updateFormation()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;
    if (!$id) {
      throw new Exception('Internal error.');
    }
    $formations = $this->db->select($id);



    $ecole = '';
    $ville = '';
    $formation = '';
    $obtenue = '';
    $date_debut = '';
    $date_fin = '';



    if ($_POST) {

      $ecole = isset($_POST['ecole']) ? $_POST['ecole'] : NULL;
      $ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
      $formation = isset($_POST['formaton$formationo']) ? $_POST['formaon$formationio'] : NULL;
      $obtenue = isset($_POST['obtenue']) ? $_POST['obtenue'] : NULL;
      $date_debut = isset($_POST['date_debut']) ? $_POST['date_debut'] : NULL;
      $date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : NULL;
      try {

        $res = $this->db->update($id);
        $this->redirect('index.php');
      } catch (Exception $e) {
        echo 'erreur !!';
      }
    }
    include 'view/Formations/modif-formation.php';
  }
}
