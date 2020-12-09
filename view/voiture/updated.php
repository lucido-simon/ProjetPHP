<?php
$vImmatriculation = htmlspecialchars($immat);
echo "<p> Voiture d'immatriculation $vImmatriculation modifiée !</p>";
require File::build_path(array("view","voiture","list.php"));
?>