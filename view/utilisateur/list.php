<h2> Liste des utilisateurs </h2>
<?php
foreach ($tab_u as $user){
	$loginURL = rawurlencode($user->getlogin());
	$login = htmlspecialchars($user->getlogin());
	$nom = htmlspecialchars($user->getnom());
	$prenom = htmlspecialchars($user->getprenom());
	echo "<p> Login : <a href='index.php?controller=utilisateur&action=read&login=$loginURL'>$login</a> | Nom : $nom | Prenom : $prenom </p>";
}
echo "<form method='get' action='index.php'>
<input type='hidden' name='controller' value='utilisateur'/>
<input type='hidden' name='action' value='create'/>
<button type='submit'>Ajouter un utilisateur</button>
</form>";
?>