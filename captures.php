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
    <title>Captures d'écran de PubliGED | Créer facilement votre blog ou votre site de généalogie</title>
	<meta name="description" content="captures d'écran illustrant les principales fonctionnalités du logiciel de création de site PubliGED"/>
	
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

<style>

#contenu figure {
    border:0px solid black;width:270px;overflow: hidden;text-align:center;float:left;
}

#contenu figure img {
    width:260px;
}

</style>    
    
<!-- fin zoom avec jquery-->
	
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.publiged.genealexis.fr"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//www.genealexis.fr/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', '10']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>

<!-- End Piwik Code -->


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
			    <a href="captures.php">Captures d'écran</a>
			    </span>
			</div>

			<!-- fin du fil d'ariane -->

            <div id="nav"> <?php include('include/sidebar.inc'); ?> </div>

            <div id="contenu">
                
                <h2>Captures d'écran</h2>
                
                	<h3>Le site généré</h3>
                
                    <figure>
                        <a href="images/grandes/capture07.png" id="single_image" title="La partie blog de PubliGED">
                        <img src="images/capture07.png" alt="capture d'écran de la partie blog du CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a> 
                        <figcaption>La partie blog</figcaption>
                    </figure>
                    
                    <figure>
                        <a href="images/grandes/capture05.png" id="single_image" title="Une fiche individuelle affichée avec PubliGED">
                        <img src="images/capture05.png" alt="Une fiche individuelle du CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a>  
                        <figcaption>Une fiche individuelle</figcaption>
                    </figure>
                    
                    <figure>
                        <a href="images/grandes/capture02.png" id="single_image" title="La liste des patronymes affichée avec PubliGED">
                        <img src="images/capture02.png" alt="La liste des patronymes affichée avec le CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a> 
                        <figcaption>Liste des patronymes</figcaption>
                    </figure>

                    <figure>
                        <a href="images/grandes/capture03.png" id="single_image" title="La liste éclair affichée avec PubliGED">
                        <img src="images/capture03.png" alt="La liste éclair affichée avec le CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a>  
                        <figcaption>Liste éclair</figcaption>
                    </figure>
              
                    <figure>
                        <a href="images/grandes/capture06.png" id="single_image" title="Les statistiques affichés avec PubliGED">
                        <img src="images/capture06.png" alt="Les statistiques affichée avec le CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a>  
                        <figcaption>Statistiques</figcaption>
                    </figure>
                    
                    <figure>    
                        <a href="images/grandes/capture08.png" id="single_image" title="La liste des sources affichée avec PubliGED">
                        <img src="images/capture08.png" alt="La liste des sources affichée avec le CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a>  
                        <figcaption>Liste des sources</figcaption>
                    </figure>  
                                                          
                    <figure>    
                        <a href="images/grandes/capture04.png" id="single_image" title="La répartition géographique avec OpenStreetMap">
                        <img src="images/capture04.png" alt="capture d'écran de la répartition géographique affichée avec le CMS réalisé en PHP/SQL dédié à la généalogie PubliGED"></a>  
                        <figcaption>Répartition géographique</figcaption>
                    </figure>    
                    
			        <div style="clear:both;"></div>
                                      
                	<h3>L'espace d'administration</h3>

                    <figure>    
                        <a href="images/grandes/adm-capture04.png" id="single_image" title="Administrez le site perso que vous avez créé avec PubliGED">
                        <img src="images/adm-capture04.png" alt="Capture d'écran de la page de PubliGED permettant de gérer son site"></a>  
                        <figcaption>Accueil de l'administration</figcaption>
                    </figure>                      
                                                        
                    <figure>    
                        <a href="images/grandes/adm-capture03.png" id="single_image" title="Administrez le site perso que vous avez créé avec PubliGED">
                        <img src="images/adm-capture03.png" alt="Capture d'écran de la page de PubliGED permettant du publier un Gedcom"></a>  
                        <figcaption>Publication d'un Gedcom</figcaption>
                    </figure>
                    
                    <figure>    
                        <a href="images/grandes/adm-capture02.png" id="single_image" title="Administrez le site perso que vous avez créé avec PubliGED">
                        <img src="images/adm-capture02.png" alt="Capture d'écran de la page de PubliGED permettant de gérer les articles"></a>  
                        <figcaption>Gestion des articles du blog</figcaption>
                    </figure>  
                    
                    <figure>    
                        <a href="images/grandes/adm-capture01.png" id="single_image" title="Administrez le site perso que vous avez créé avec PubliGED">
                        <img src="images/adm-capture01.png" alt="Capture d'écran de la page de PubliGED permettant de personnaliser les menus"></a>  
                        <figcaption>Personnalisation des modules du menu</figcaption>
                    </figure>  

                    <figure>    
                        <a href="images/grandes/adm-capture05.png" id="single_image" title="Administrez le site perso que vous avez créé avec PubliGED">
                        <img src="images/adm-capture05.png" alt="Capture d'écran de la page de PubliGED permettant de gérer les options de PubliGED"></a>  
                        <figcaption>Les options</figcaption>
                    </figure>  
                    
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