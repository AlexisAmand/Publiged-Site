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
    <title>PubliGED | Publiez facilement votre généalogie | La Démo de PubliGED</title>
	<meta name="description" content=""/>
	
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
			    <a href="demos.php">Démonstration</a>
			    </span>
			</div>

			<!-- fin du fil d'ariane -->

            <div id="nav"> <?php include('include/sidebar.inc'); ?> </div>
            
            <div id="contenu">
                
				<h2>Demos</h2>

                <p>Trés bientôt :)</p> 

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