<?php
$login = htmlspecialchars($login);
$nom = htmlspecialchars($nom);
$prenom = htmlspecialchars($prenom);
$controller = static::$object;
echo "
<h2> Formulaire pour utilisateur </h2>
<form method='post' action='index.php?controller=$controller&action=$action'>
	<fieldset>
		<legend>Mon formulaire :</legend>
		<p>
			<label for='immat_id'>Login</label> :
			<input $StateImmatField type='text' placeholder='Ex : Login Example' value='$login' name='login' required/>
		</p>
		<p>
			<label for='marque_id'>Nom</label> :
			<input type='text' placeholder='Ex : Bernard' value='$nom' name='nom' required/>
		</p>
		<p>
			<label for='couleur_id'>Prenom</label> :
			<input type='text' placeholder='Ex : Alexis' value='$prenom' name='prenom' required/>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset>
</form>"
?>