<?php 
/* correction du bug lié au $_SERVER['PATH_INFO'] et aux liens relatifs */
/* voir sujet correspond sur WRI                                        */

if (!empty($_SERVER['PATH_INFO'])) {
   header('Statut: 301 Moved Permanently'); 
   header("Location: ".$_SERVER['SCRIPT_NAME']);
   exit();
}
?>

<!doctype html>
<html lang="fr">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-11509906-23"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-11509906-23');
    </script>

	<meta charset="utf-8">
    <title>PubliGED | Publiez facilement votre généalogie | Les fonctionnalites de PubliGED</title>
	<meta name="description" content="Les principales fonctionnalités de PubliGED, systéme de publication de contenu dédié à la généalogie"/>
	
    <script type="text/javascript" src="js/script.js"></script>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../cartes-postales/style/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	
	<!-- zoom avec Jquery -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    
    <script type="text/javascript">
    
    $(document).ready(function() {

	/* This is basic - uses default settings */
	
	$("a#single_image").fancybox();
	
	/* Using custom settings */
	
	$("a#inline").fancybox({
		'hideOnContentClick': true
	});

	/* Apply fancybox to multiple items */
	
	$("a.group").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
	
});
</script>
    
<!-- fin zoom avec jquery-->

</head>

<body>
 
<div class="Main">
	<div class="Sheet">     
    	<div class="Sheet-body">
        	<header>					
					<hgroup>					
						<h1>PubliGED</h1>
						<h2>Publiez facilement votre généalogie</h2>
					</hgroup>
				</header>
                        
			<?php include ('include/pillmenu.inc'); ?>
                				
			<!-- fil d'ariane -->
			 
			<div style="witdh:100%;height:20px;border:0px solid black;">
			    <span class="breadcrumbs pathway">
			    <strong style="color: #175D82;">Vous-&ecirc;tes ici:&nbsp;</strong>
			    <a href="index.php">Accueil</a> 
			    <img src="images/arrow.png" alt=""  /> 
			    <a href="index.php">PubliGED</a>
			    <img src="images/arrow.png" alt=""  /> 
			    <a href="fonctionnalites.php">Les fonctionnalités</a>
			    </span>
			</div>

			<!-- fin du fil d'ariane -->

            <div id="nav"> <?php include('include/sidebar.inc'); ?> </div>
            
            <div id="contenu">

                <h2>Les fonctionnalités</h2>
                
                <h3>Partie « généalogie »</h3>

                <ul>
                    <li>Liste des patronymes : affichage des patronymes par ordre alphabétique</li> 
                    <li>Liste des individus : affichage de la liste des individus par ordre alphabétique</li> 
                    <li>Liste éclair : répartition des patronymes selon les lieux et les dates</li>
                    <li>Liste des événements:liste des événements vécus par les individus de la base de données</li>
                    <li>Liste des lieux : Répartition géographique des individus sur une carte du monde</li>
                    <li>L'API de Google Map est remplacée par Open Street Map</li>
                    <li>Fiches individuelles</li>
                    <li>Statistiques</li>
                    <li>Personnalisation de l'ordre des modules du menu latéral</li>
                    <li>Liste des sources</li> 
                    
                </ul>

                <h3>Partie « blog »</h3>

                <ul>
                    <li>Personnalisation de l'ordre des modules du menu latéral</li> 
                    <li>Interface WYSIWYG pour écrire vos articles</li>
                    <li>Articles triés par catégories</li>
                    <li>Affichage de la liste des articles d'une catégorie donnée</li>
                    <li>Possibilité pour les utilisateurs de laisser un commentaire</li>
                </ul>    

                <h3>Fonctionnalités en cours de développement ou en projet</h3>

                <ul>
                    
                    <li>Modules de la partie « généalogie » personnalisables.</li>
                    <li>Modules de la partie « blog » personnalisables.</li>
                    <li>Liste des images</li>
                    <li>Version anglaise</li>
                    <li>Anniversaires du jour</li>
                    <li>Mes ancêtres / numérotation de sosa</li>
                    <li>Recherche d'un individu à l'aide d'un mot clé</li>
                    <li>Ajouter manuellement des références individuelles</li>
                    <li>Lier un article et un individu</li>
                    <li>Des lignes de vie, des lignes de temps</li>
                    <li>Des tableaux excel (recensements, relevés)</li>
                    <li>Des albums photos (famille, monuments aux morts, ... )</li>
                </ul>
                
                
                

		  </div>
		  <!-- fin du content -->

	      <?php include('include/footer.inc'); ?>
      
	  </div>

      <!-- fin du Sheet-body -->

	</div>
<!-- fin du Sheet -->
</div>
<!-- fin du main -->



</body>
</html>