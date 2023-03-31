<!DOCTYPE html>
<html>
<head>
<title>ACCUEIL</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="contenu">
<h3 class="corps-4">Données</h3>
<div class="corps-3">
<p>Ici, vous trouverez toutes les références disponibles !</p>
</div>


<?php


$fichier = 'datas/films.json';

$tabFilmsJSON = file_get_contents($fichier);

$tabFilmsPHP = json_decode($tabFilmsJSON,true);


echo'<table id="montableau">


       <thead>
         <th class="principaux">Marque de vetement</th>
         <th class="principaux">Date de création </th>
         <th class="principaux">Createur</th>
         <th class="principaux">Pays</th>
         <th class="principaux">Categorie de vetement </th>
         <th class="principaux">Livres</th>
       </thead>

      <tbody>';



foreach ($tabFilmsPHP as $marque) {



	echo'<tr>';

	echo '<td>'.$marque['Marque de vetement'].'</td>';
	echo '<td>'.$marque['Date de création'].'</td>';
	echo '<td>'.$marque['Créateur'].'</td>';
	echo '<td>'.$marque['Pays'].'</td>';
	echo '<td>'.$marque['Categorie de vetement'].'</td>';
	echo '<td>'.$marque['Livres'].'</td>';
	echo'</tr>';
}

      echo '</tbody></table>';
     
        
?>

</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>



<script src="http://code.jquery.com/jquery-3.6.3.js"></script>
<script src="http://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
		console.log('go');
		$('#montableau').DataTable(

			{language: {url: 'http://cdn.datatables.net/plug-ins/1.13.1/i18n/fr-FR.json'}} 

			);
        } );
</script>
</body>
</html>
