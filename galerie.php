<!DOCTYPE html>
<html>
<head>
<title>ACCUEIL</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
</head>
<body>

<?php
// Appel du bloc Header et du Menu>
require 'header.php';
?>

<main class="contenu">
<h1>ACCUEIL</h1>



<?php
if (isset($_SESSION['galerie'])) {
echo '<p>'.$_SESSION['galerie'].'</p>'."\n";
session_unset();
}
?>

<h3 class="corps-6">Galerie</h3>

<form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
<label for="image">Choisir un fichier</label>
<input type="file" name="image" id="image" />
<input type="submit" value="Télécharger" />
</form>


<div style="display: flex; flex-wrap: wrap" class="div_img">
<?php
$nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
$dossier= opendir("images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}


$i=1; // On initialise i à 1
while($i <= $nbFichiers) {

	echo '<img class="img_galerie" src="images/galerie/image'.$i.'.jpg" alt="vetement" style="width: 27%; height: auto; margin: 1% 1% 1% 1%; object-fit: cover;">';
$i++;
}



?>

</div>

</main>





<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>
