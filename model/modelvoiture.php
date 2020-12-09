<?php
require_once File::build_path(array("model","model.php"));
class ModelVoiture extends model {
	private $marque;
	private $couleur;
	private $immatriculation;
	protected static $object = "voiture";
	protected static $primary='immatriculation';

	public function getMarque() {
		return $this->marque;
	}

	public function getCouleur() {
		return $this->couleur;
	}

	public function getImmatriculation() {
		return $this->immatriculation;
	}

	public function __construct($data = NULL)  {
		if (!is_null($data)) {
			$this->immatriculation = $data[0];
			$this->marque = $data[1];
			$this->couleur = $data[2];
		}
	}
}
?>