<?php
$login = htmlspecialchars($login);
echo "<p> Utilisateur de login $login modifié !</p>";
require File::build_path(array("view","utilisateur","list.php"));
?>