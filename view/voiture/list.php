<h2> Liste des voitures </h2>
<?php
foreach ($tab_v as $v){
	$vImmatriculationUrl = rawurlencode($v->getImmatriculation());
	$vImmatriculationHTML = htmlspecialchars($v->getImmatriculation());
	echo "
	<p>
		Voiture d'immatriculation
		<a href='index.php?action=read&immatriculation=$vImmatriculationUrl'>
			$vImmatriculationHTML
		</a>
	</p>";
}
echo "
<form method='get' action='index.php'>
	<input type='hidden' name='action' value='create'/>
	<button type='submit'>Ajouter une voiture</button>
</form>";
?>