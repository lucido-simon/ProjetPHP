<h2> Détail de l'utilisateur </h2>
<?php
$nom = htmlspecialchars($u->getNom());
$prenom = htmlspecialchars($u->getPrenom());
$login = htmlspecialchars($u->getLogin());
echo "<p> L'utilisateur $nom $prenom a pour login $login </p>";
echo "<form method='get' action='index.php'>
<input type='hidden' name='controller' value='utilisateur'/>
<input type='hidden' name='action' value='update'/>
<input type='hidden' name='login' value='$login'/>
<button type='submit'>Modifier l'utilisateur</button>
</form>";
echo "<form method='get' action='index.php'>
<input type='hidden' name='controller' value='utilisateur'/>
<input type='hidden' name='action' value='delete'/>
<input type='hidden' name='login' value='$login'/>
<button type='submit'>Supprimer l'utilisateur</button>
</form>";
?>
