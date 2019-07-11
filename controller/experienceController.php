<?php

namespace controller;

class experienceController{

	private $db;
	public function __construct(){

		$e = new Error; //gestion des erreurs. Pas besoin d'ecrire: controller\Error car le fichier se trouve déjà à l'intérieur

		$this->db = new \model\EntityRepositoryE;

	}
	//-------------------------------------------------
	public function redirect($location){

		header('Location: ' . $location);
	}

	//-------------------------------------------------
	public function handleRequest(){

		$op = isset( $_GET['op'] ) ? $_GET['op'] : NULL;

		try{
			if( !$op || $op == 'list'){
				$this->listExperiences();
			}
			elseif( $op == 'new' ){
				$this->saveExperience();
			}
			elseif( $op == 'delete' ){
				$this->deleteExperience();
			}
			elseif( $op == 'show'){
				$this->showExperience();
			}

			//-------------------------------------------------
			elseif( $op == 'update'){
				$this->updateExperience();
			}
			else{
				$this->showError("Page not found", "Page for operation ". $op ." was not found." );
			}
		}
		catch(Exception $e){

			$this->showError("Application error", $e->getMessage() );
		}
	}
	//-------------------------------------------------
	public function listExperiences(){

		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : NULL;

		$experiences = $this->db->selectAll($orderby);

		include 'view/visiteur/Experiences/experiences.php';
		}
	//-------------------------------------------------
	public function saveExperience(){

		$title = 'Add new experience';

		$societe ='';
		$ville ='';
		$emploi ='';
		$tache ='';
		$date_debut ='';
		$date_fin ='';

		if( $_POST) {

			$societe = isset($_POST['societe']) ? $_POST['societe'] : NULL;
			$ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
			$emploi = isset($_POST['emploi']) ? $_POST['emploi'] : NULL;
			$tache = isset($_POST['tache']) ? $_POST['tache'] : NULL;
			$date_debut = isset($_POST['date_debut']) ? $_POST['date_debut'] : NULL;
			$date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : NULL;


			try{

				$res = $this->db->insert();
				$this->redirect('admin.php');
				return;
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/visiteur/Experiences/experience-form.php';
	}

	//-------------------------------------------------
	public function deleteExperience(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( !$id ){

			throw new Exception('Internal error.');
		}
		$res = $this->db->delete($id);

		$this->redirect('admin.php');
	}

	//-------------------------------------------------
	public function showExperience(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;

		if( ! $id ){

			throw new Exception('Internal error.');
		}
		$experience = $this->db->select($id);

		include 'view/visiteur/Experiences/experience.php';
	}

	public function updateExperience(){

		$id = isset($_GET['id']) ? $_GET['id'] : NULL;
		if( ! $id ){
			throw new Exception('Internal error.');
		}
		$experience = $this->db->select($id);



		$societe ='';
		$ville ='';
		$emploi ='';
		$tache ='';
		$date_debut ='';
		$date_fin ='';



		if( $_POST) {

			$societe = isset($_POST['societe']) ? $_POST['societe'] : NULL;
			$ville = isset($_POST['ville']) ? $_POST['ville'] : NULL;
			$emploi = isset($_POST['emploi']) ? $_POST['emploi'] : NULL;
			$tache = isset($_POST['tache']) ? $_POST['tache'] : NULL;
			$date_debut = isset($_POST['date_debut']) ? $_POST['date_debut'] : NULL;
			$date_fin = isset($_POST['date_fin']) ? $_POST['date_fin'] : NULL;
			try{

				$res = $this->db->update($id);
				$this->redirect('admin.php');
			}
			catch(Exception $e){
				echo 'erreur !!';
			}
		}
		include 'view/visiteur/Experiences/modif-experience.php';
	}
}
