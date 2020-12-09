<?php
require_once File::build_path(array("model","modelutilisateur.php"));
class ControllerUtilisateur {
	protected static $object = "utilisateur";

	public static function readall() {
		$view='list';
		$pagetitle='Liste des utilisateurs';
		$tab_u = modelutilisateur::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function read() {
		$pagetitle="Détail de l'utilisateur";
		$l = $_GET["login"];
		$u = ModelUtilisateur::select($l);
		$view = ($u == NULL) ? 'error' : 'detail';
		$ErrorMessage = "Aucun utilisateur n'a pour login $l !"; // Utile pour la vue error.php
		require File::build_path(array("view","view.php"));
	}

	public static function delete() {
		$login = $_GET['login'];
		ModelUtilisateur::delete($login);
		$pagetitle='Résultat';
		$view = 'deleted';
		$tab_u = ModelUtilisateur::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function create() {
		$pagetitle="Création d'un utilisateur";
		$view='update';
		$login = "";
		$nom = "";
		$prenom = "";
		$StateImmatField = "required";
		$action = "created";
		require File::build_path(array("view","view.php"));
	}

	public static function update() {
		$pagetitle="Modification d'un utilisateur";
		$view = 'update';
		$u = ModelUtilisateur::select($_GET['login']);
		$login = $u->getLogin();
		$nom = $u->getNom();
		$prenom = $u->getPrenom();
		$StateImmatField = "readonly";
		$action = "updated";
		require File::build_path(array("view","view.php"));
	}

	public static function created() {
		$view='created';
		$pagetitle='Résultat';
		ModelUtilisateur::save($_POST);
		$login = $_POST["login"];
		$tab_u = ModelUtilisateur::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function updated() {
		ModelUtilisateur::update($_POST);
		$login = $_POST['login'];
		$pagetitle='Résultat';
		$view = 'updated';
		$tab_u = ModelUtilisateur::selectAll();
		require File::build_path(array("view","view.php"));
	}

	public static function preference() {
		$pagetitle="Choix de la préférence";
		$view = 'preference';
		require File::build_path(array("view","view.php"));
	}

	public static function preferenced() {
		$preference = $_POST["preference"];
		setcookie("preference", $preference, time()+30);
		header("Refresh: 0;url=index.php");
	}
}
?>