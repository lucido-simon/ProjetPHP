<form method='post' action='index.php?controller=utilisateur&action=preferenced'>
	<fieldset>
		<legend>Choisissez votre préférence :</legend>
		<p>
			<label>Contrôleur</label> :<br>
			<input id="voiture" type="radio" name="preference" value="voiture" checked>
			<label for="voiture">Voiture</label><br>
			<input id="utilisateur" type="radio" name="preference" value="utilisateur">
			<label for="utilisateur">Utilisateur</label>
		</p>
		<p>
			<input type='submit' value='Envoyer' />
		</p>
	</fieldset> 
</form>