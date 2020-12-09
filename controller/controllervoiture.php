<?php
require_once File::build_path(array("model","modelvoiture.php"));
class ControllerVoiture {
	protected static $object = "voiture";

	public static function readall() {
		$view='list';
		$pagetitle='Liste des voitures';
		$tab_v = ModelVoiture::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function read() {
		$pagetitle='Détail de la voiture';
		$p = $_GET["immatriculation"];
		$v = ModelVoiture::select($p);
		$view = ($v == NULL) ? 'error' : 'detail';
		$ErrorMessage = "Aucune voiture n'a la plaque $p !"; // Utile pour la vue error.php
		require File::build_path(array("view","view.php"));
	}

	public static function delete() {
		$immat = $_GET['immat'];
		ModelVoiture::delete($immat);
		$pagetitle='Résultat';
		$view = 'deleted';
		$tab_v = ModelVoiture::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function create() {
		$pagetitle="Création d'une voiture";
		$view='update';
		$immat = "";
		$marque = "";
		$couleur = "";
		$StateImmatField = "required";
		$action = "created";
		require File::build_path(array("view","view.php"));
	}

	public static function update() {
		$pagetitle='Modification de la voiture';
		$view = 'update';
		$v = ModelVoiture::select($_GET['immat']);
		$immat = $v->getImmatriculation();
		$marque = $v->getMarque();
		$couleur = $v->getCouleur();
		$StateImmatField = "readonly";
		$action = "updated";
		require File::build_path(array("view","view.php"));
	}

	public static function created() {
		$view='created';
		$pagetitle='Résultat';
		ModelVoiture::save($_POST);
		$immat = $_POST["immatriculation"];
		$tab_v = ModelVoiture::selectAll();
		require File::build_path(array("view","view.php"));
	}
	
	public static function updated() {
		ModelVoiture::update($_POST);
		$immat = $_POST['immatriculation'];
		$pagetitle='Résultat';
		$view = 'updated';
		$tab_v = ModelVoiture::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function error() {
		$pagetitle='Erreur';
		$view = 'error';
		$ErrorMessage = "Erreur dans le nom de la classe où méthode. '{$_GET['controller']}::{$_GET['action']}()'";
		require File::build_path(array("view","view.php"));
	}
}
?>