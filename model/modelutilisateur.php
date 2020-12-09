<?php
require_once File::build_path(array("model","model.php"));
class ModelUtilisateur extends model {
	private $login;
	private $nom;
	private $prenom;
	protected static $object = "utilisateur";
	protected static $primary='login';

	public function getLogin() {
		return $this->login;  
	}

	public function getNom() {
		return $this->nom;  
	}

	public function getPrenom() {
		return $this->prenom;  
	}

	public function __construct($data = NULL)  {
		if (!is_null($data)) {
			$this->login = $data[0];
			$this->nom = $data[1];
			$this->prenom = $data[2];
		}
	}
}
?>