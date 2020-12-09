<?php
$immat = htmlspecialchars($immat);
echo "<p> Voiture d'immatriculation $immat supprimée !</p>";
require File::build_path(array("view","voiture","list.php"));
?>