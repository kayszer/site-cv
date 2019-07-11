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

    $op = isset($_GET['op']) ? $_GET['op'] : NULL;

    try {
      if (!$op || $op == 'list') {
        $this->listCompetences();
      } elseif ($op == 'new') {
        $this->saveCompetence();
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

    include 'view/visiteur/Competences/competences.php';
  }

  //-------------------------------------------------
  public function showCompetence()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;

    if (!$id) {

      throw new Exception('Internal error.');
    }
    $competences = $this->db->select($id);

    include 'view/visiteur/Competences/competence.php';
  }

  public function updateCompetence()
  {

    $id = isset($_GET['id']) ? $_GET['id'] : NULL;
    if (!$id) {
      throw new Exception('Internal error.');
    }
    $competences = $this->db->select($id);



    $html = '';
    $css = '';
    $js = '';
    $wordpress = '';
    $bootstrap = '';
    $date_fin = '';



    if ($_POST) {

      $html = isset($_POST['html']) ? $_POST['html'] : NULL;
      $css = isset($_POST['css']) ? $_POST['css'] : NULL;
      $js = isset($_POST['js']) ? $_POST['js'] : NULL;
      $wordpress = isset($_POST['wordpress']) ? $_POST['wordpress'] : NULL;
      $bootstrap = isset($_POST['bootstrap']) ? $_POST['bootstrap'] : NULL;
      try {

        $res = $this->db->update($id);
        $this->redirect('admin.php');
      } catch (Exception $e) {
        echo 'erreur !!';
      }
    }
    include 'view/visiteur/Competences/modif-competence.php';
  }
}
