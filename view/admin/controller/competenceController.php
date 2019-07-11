<?php

namespace controller;

class competenceController
{

  private $db;
  public function __construct()
  {

    $e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

    $this->db = new \model\EntityRepositoryC;
  }
  //-------------------------------------------------
  public function redirect($location)
  {

    header('Location: ' . $location);
  }

  //-------------------------------------------------
  public function handleRequest()
  {

    $op = isset($_GET['opC']) ? $_GET['opC'] : NULL;

    try {
      if (!$op || $op == 'list') {
        $this->listCompetences();
      } elseif ($op == 'new') {
        $this->saveCompetences();
      } elseif ($op == 'delete') {
        $this->deleteCompetence();
      } elseif ($op == 'show') {
        $this->showCompetence();
      }

      //-------------------------------------------------

      elseif ($op == 'update') {
        $this->updateCompetence();
      } else {
        $this->showError("Page not found", "Page for operation " . $op . " was not found.");
      }
    } catch (Exception $e) {

      $this->showError("Application error", $e->getMessage());
    }
  }
  //-------------------------------------------------
  public function listCompetences()
  {

    $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

    $competences = $this->db->selectAll($orderby);

    include 'view/Competences/competences.php';
  }
  //-------------------------------------------------
  public function saveCompetences()
  {

    $title = 'Add new competence';

    $nom = '';
    $note = '';

    if ($_POST) {

      $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
      $note = isset($_POST['note']) ? $_POST['note'] : NULL;



      try {

        $res = $this->db->insert();
        $this->redirect('index.php');
        return;
      } catch (Exception $e) {
        echo 'erreur !!';
      }
    }
    include 'view/Competences/competence-form.php';
  }
  //-------------------------------------------------
  public function deleteCompetence()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $res = $this->db->delete($id);

    $this->redirect('index.php');
  }


  //-------------------------------------------------
  public function showCompetence()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $competences = $this->db->select($id);

    include 'view/Competences/competence.php';
  }

  public function updateCompetence()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;
    if (!$id) {
      throw new Exception('Internal error.');
    }
    $competences = $this->db->select($id);



    $nom = '';
    $note = '';




    if ($_POST) {

      $nom = isset($_POST['nom']) ? $_POST['nom'] : NULL;
      $note = isset($_POST['note']) ? $_POST['note'] : NULL;
      try {

        $res = $this->db->update($id);
        $this->redirect('index.php');
      } catch (Exception $e) {
        echo 'erreur !!';
      }
    }
    include 'view/Competences/modif-competence.php';
  }
}
