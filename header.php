<header>
	<nav class="navbar">

    	<a href="index.php" class="logo">ARCHV</a>
    <div class="nav-links">
        <ul>
        	<li><a href="index.php" <?php if (basename ($_SERVER['PHP_SELF'])=="index.php") {?> class='active' <?php }?> >Accueil</a></li>
            <li><a href="donnees.php" <?php if (basename ($_SERVER['PHP_SELF'])=="donnees.php") {?> class='active' <?php }?> >Données</a></li>
            <li><a href="galerie.php" <?php if (basename ($_SERVER['PHP_SELF'])=="galerie.php") {?> class='active' <?php }?> >Galerie</a></li>
            <li><a href="contact.php" <?php if (basename ($_SERVER['PHP_SELF'])=="contact.php") {?> class='active' <?php }?> >Contact</a></li>
            <li><a href="partenaires.php" <?php if (basename ($_SERVER['PHP_SELF'])=="partenaires.php") {?> class='active' <?php }?> >Partenaires</a></li>
        </ul>
    </div>  
        
     </nav>
</header>