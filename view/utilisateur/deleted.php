<?php
$login = htmlspecialchars($login);
echo "<p> Utilisateur de login $login supprimé !</p>";
require File::build_path(array("view","utilisateur","list.php"));
?>