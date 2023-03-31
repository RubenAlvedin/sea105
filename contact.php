
<?php
session_start();
?>

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
<h3 class="corps-4">Contact</h3>
<div>
<p class="text">Un petit message a nous envoyer ?!</p>
</div>



<div class="formulaire">
 <form id="contact" action="traitements/envoi_mail.php" method="post">
 <div id="en_tete">

   <div>
	<label for="prenom">Prénom<span>*</span></label>
	<input type="text" name="prenom" id="prenom" required />
   </div>

   <div>
	<label for="prenom">Nom<span>*</span></label>
	<input type="text" name="nom" id="nom" required />
   </div>
 
 </div>
	<label for="email">E-mail<span>*</span></label>
	<input type="email" name="email" id="email" placeholder="nom@domaine.fr" required />

	<label for="message">Message<span>*</span></label>
	<textarea name="message" id="message" placeholder="Votre message" required ></textarea>


	<input type="radio" name="demande" value="d'information" id="info">
	<label for="information">Information</label>
	<input type="radio" name="demande" value="de devis" id="devis">
	<label for="information">Devis</label>
	<input type="radio" name="demande" value="de reclamation" id="reclam">
	<label for="information">Réclamation</label>

	<input id="bouton" type="submit" value="Envoyer" />

 </form>


</div>

<?php
if (isset($_SESSION['information'])) {
echo '<h5>'.$_SESSION['information'].'</h5>'."\n";
session_unset();
}
?>


</main>

<?php
// Appel du Pied de Page
require 'footer.php';
?>

</body>
</html>
