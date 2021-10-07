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
    <title>Les fonctionnalités de PubliGED | Publiez facilement votre généalogie | Créer facilement votre blog ou votre site de généalogie</title>
	<meta name="description" content="Les principales fonctionnalités de PubliGED, systéme de publication de contenu dédié à la généalogie"/>
	
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <!--[if IE 6]><link rel="stylesheet" href="../cartes-postales/style/style.ie6.css" type="text/css" media="screen" /><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Short+Stack' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Handlee' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	
	<!-- zoom avec Jquery -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" href="js/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
        
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

                <h2>Les fonctionnalités de PubliGED</h2>

                    <h3>Partie « généalogie »</h3>

                    <p>
                    - Liste des patronymes : affichage des patronymes par ordre alphabétique<br />
                    - Liste des individus : affichage de la liste des individus par ordre alphabétique<br />
                    - Liste éclair : répartition des patronymes selon les lieux et les dates<br />
                    - Liste des événements :liste des événements vécus par les individus de la base de données<br />
                    - Liste des lieux : répartition géographique des individus sur une carte du monde<br />
                    - L'API de Google Map est remplacée par Open Street Map<br />
                    - Fiches individuelles<br />
                    - Statistiques<br />
                    - Personnalisation de l'ordre des modules du menu latéral<br />
                    - Liste des sources<br />
                    </p>

                    <h3>Partie « blog »</h3>

                    <p>
                    - Personnalisation de l'ordre des modules du menu latéral<br />
                    - Interface WYSIWYG pour écrire vos articles<br />
                    - Articles triés par catégorie<br />
                    - Affichage de la liste des articles d'une catégorie donnée<br />
                    - Possibilité pour les utilisateurs de laisser un commentaire<br />
                    </p>

                    <h3>Partie « administration »</h3>

                    <p>
                    - Création d'un article et/ou d'une catégorie<br />
                    - Modération des commentaires<br />
                    - Envoi et suppression d'un gedcom<br />
                    - Modules de la partie « généalogie » personnalisables<br />
                    - Modules de la partie « blog » personnalisables<br />
                    - Suppression de la base de données<br />
                    - Statistique sur la base de données<br />
                    - Paramètres du site<br />
                    - Choix d'un thème pour le site<br />
                    - Personnalisation des métas et SEO<br />
                    </p>

                    <h3>Fonctionnalités en cours de développement ou en projet</h3>

                    <p>
                    - Ajouter/supprimer un utilisateur<br />
                    - Listes les utilisateurs<br />
                    - Liste des images<br />
                    - Version anglaise<br />
                    - Anniversaires du jour<br />
                    - Mes ancêtres/numérotation de sosa<br />
                    - Recherche d'un individu à l'aide d'un mot-clé<br />
                    - Ajouter manuellement des références individuelles<br />
                    - Lier un article et un individu<br />
                    - Des lignes de vie, des lignes de temps<br />
                    - Des tableaux Excel (recensements, relevés)<br />
                    - Des albums photos (famille, monuments aux morts, ... )<br />
                    </p>

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