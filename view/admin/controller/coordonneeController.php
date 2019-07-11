<?php

namespace controller;

class coordonneeController
{

  private $db;
  public function __construct()
  {

    $e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

    $this->db = new \model\EntityRepositoryCo;
  }
  //-------------------------------------------------
  public function redirect($location)
  {

    header('Location: ' . $location);
  }

  //-------------------------------------------------
  public function handleRequest()
  {

    $op = isset($_GET['opCo']) ? $_GET['opCo'] : NULL;

    try {
      if (!$op || $op == 'listCo') {
        $this->listCoordonnees();
      } elseif ($op == 'newCo') {
        $this->saveCoordonnees();
      } elseif ($op == 'deleteCo') {
        $this->deleteCoordonnee();
      } elseif ($op == 'showCo') {
        $this->showCoordonnee();
      }

      //-------------------------------------------------

      elseif ($op == 'update') {
        $this->updateCoordonnee();
      } else {
        $this->showError("Page not found", "Page for operation " . $op . " was not found.");
      }
    } catch (Exception $e) {

      $this->showError("Application error", $e->getMessage());
    }
  }
  //-------------------------------------------------
  public function listCoordonnees()
  {

    $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

    $coordonnees = $this->db->selectAll($orderby);

    include 'view/Coordonnees/coordonnees.php';
  }
  //-------------------------------------------------
  public function saveCoordonnees()
  {

    $title = 'Add new coordonnee';

    $ecole = '';
    $ville = '';
    $coordonnee = '';
    $obtenue = '';
    $date_debut = '';
    $date_fin = '';

    if ($_POST) {

      $ecole = isset($_POST['ecole']) ? $_POST['ecole'] : NULL;
      $ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
      $coordonnee = isset($_POST['coordonnee']) ? $_POST['coordonnee'] : NULL;
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
    include 'view/Coordonnees/coordonnee-form.php';
  }

  //-------------------------------------------------
  public function deleteCoordonnee()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $res = $this->db->delete($id);

    $this->redirect('index.php');
  }

  //-------------------------------------------------
  public function showCoordonnee()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $coordonnee = $this->db->select($id);

    include 'view/Coordonnees/coordonnee.php';
  }

  public function updateCoordonnee()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;
    if (!$id) {
      throw new Exception('Internal error.');
    }
    $coordonnees = $this->db->select($id);



    $ecole = '';
    $ville = '';
    $coordonnee = '';
    $obtenue = '';
    $date_debut = '';
    $date_fin = '';



    if ($_POST) {

      $ecole = isset($_POST['ecole']) ? $_POST['ecole'] : NULL;
      $ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
      $coordonnee = isset($_POST['coordonnee']) ? $_POST['coordonnee'] : NULL;
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
    include 'view/Coordonnees/modif-coordonnee.php';
  }
}
