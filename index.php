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
    <title>PubliGED | Publiez facilement votre généalogie</title>
	<meta name="description" content="PubliGED est un logiciel développé en PHP et SQL qui permet de publier facilement sa généalogie sur internet en créant un site web dynamique et un blog"/>
	
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

<style>

#contenu figure img {
    border:0px solid black;width:270px;text-align:center;
}

</style>

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
			    <a href="index.php">Présentation du projet</a>
			    </span>
			</div>

			<!-- fin du fil d'ariane -->

            <div id="nav"> <?php include('include/sidebar.inc'); ?> </div>
            
            <div id="contenu">

                <h2>Présentation du projet</h2>    
                
			        <h3>Qu’est ce que PubliGED ?</h3>

                    <p class="text-align:justify;">PubliGED est ce que j’appelle un GMS (Genealogy Management System) par analogie avec les CMS, comme Joomla, WordPress ou Spip. Développé essentiellement en PHP et SQL, avec quelques gouttes de CSS et de HTML, PubliGED a pour but de permettre aux généalogistes de publier facilement et rapidement leurs généalogies en utilisant le gedcom, un format de fichier commun à la plupart des logiciels de généalogie.</p>

                    <p class="text-align:justify;">Si vous êtes curieux, j'ai mis le code souce en ligne, mais pour l'instant, j'aimerai éviter que d'autres personnes contribuent au projet pour le moment, j'ai un peu peur que ça parte dans tous les sens. Cependant, n'hésitez pas à me soumettre vos idées et vos suggestions, voire même à consulter les sources à titre pédagogique.</p>

                    <p class="text-align:justify;">PubliGED a deux grandes fonctionnalités :</p> 

                    <p class="text-align:justify;">1) Une partie concerne la transformation du gedcom en pages web qui permettent de consulter facilement la base d’ancêtres: fiches individuelles, listes éclairs, répartition géographique, listes de patronymes, etc.</p>
                            
                    <p class="text-align:justify;">2) La seconde partie est un mini-blog qui permet de publier des articles pour par exemple parler de ses recherches ou pour raconter la vie de ses ancêtres. Les articles peut-être triés par catégories, et les visiteurs peuvent laisser des commentaires.</p>

                    <h3>Environement de développement</h3>
                        <p>
                            - Laragon 4.0.16<br />
                            - Apache 2.4.35<br />
                            - phpMyAdmin 4.8.5<br />
                            - Windows 10<br />
                            - Eclipse IDE for PHP Developers 2020-06 (4.16.0)<br />
                        </p>

                    <h3>Langages utilisés</h3>
                        <p>
                            - HTML<br />
                            - CSS<br />
                            - PHP 7.2.19<br />
                            - SQL (via MySQL 5.7.24)<br />
                            - Javascript<br />
                            - Framework<br />
                            - Bootstrap 4.4.1<br />
                        </p>

                    <h3>Librairies PHP</h3>
                        <p>
                        (Obtenues via Packagist et Composer 2)<br /><br />
                            - PHPMailer/PHPMailer 6.3.0<br />
                            - egulias/EmailValidator 2.1.25<br />
                            - mpdf/mpdf 7.1.9<br />
                        </p>

                    <h3>Javascript (dont tinyMCE et JavaScript)</h3>
                        <p>
                            - <a href="https://datatables.net/">Datatables 1.10.23</a></br/>
                            - <a href="https://leafletjs.com/download.html">Leaflet 1.7.1</a></br/>
                            - <a href="https://www.tiny.cloud/get-tiny/self-hosted/">tinyMCE 5.1.5</a></br/>
                            - <a href="https://gitlab.com/meno/dropzone">Dropzone 5.7.0</a></br/>
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