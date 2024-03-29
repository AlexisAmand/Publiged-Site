<?php
header("Status: 301 Moved Permanently", false, 301);
header("Location: https://www.publiged.com/index.php");
exit();
?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="PubliGED est un logiciel développé en PHP et SQL qui permet de publier facilement sa généalogie sur internet en créant un site web dynamique et un blog"/>
        <meta name="author" content="Alexis AMAND" />
        <title>Le Projet PubliGED | Créer facilement votre blog ou votre site de généalogie</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
       
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Matomo -->
        <script type="text/javascript">
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u="//matomo.boitasite.com/";
            _paq.push(['setTrackerUrl', u+'matomo.php']);
            _paq.push(['setSiteId', '6']);
            var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
            g.type='text/javascript'; g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
        </script>
        <!-- End Matomo Code -->

    </head>

    <body id="page-top">

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">PubliGED</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Fonctionnalités</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#captures">Captures</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#telechargement">Téléchargement</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="https://fr.tipeee.com/genealexis" title="Page Tipeee de PubliGED">Soutenir</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Introduction -->
        <header class="masthead h-100">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">

                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Racontez facilement l'histoire de vos ancêtres</h1>
                        <hr class="divider my-4" />
                    </div>

                    <div class="col-lg-9 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">PubliGED est un GMS qui a pour but de permettre aux généalogistes de publier facilement et rapidement leurs généalogies en utilisant le gedcom, un format de fichier commun à la plupart des logiciels de généalogie.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about" title="En savoir plus sur les fonctionnalités du projet de CMS PubliGED">En savoir plus</a>
                    </div>

                </div>
            </div>
        </header>

        <!-- Les fonctionnalités de PubliGED -->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">Les fonctionnalités de PubliGED</h2>
                        <hr class="divider light my-4" />

                        <div class="row">
                            <div class="col-12 mb-4">
                                <p class="text-center text-white-50">PubliGED est un GMS (Genealogy Management System) par analogie avec les CMS, comme Joomla, WordPress ou Spip. Développé essentiellement en PHP et SQL, avec quelques gouttes de CSS et de HTML, il a pour but de permettre aux généalogistes de publier facilement et rapidement leurs généalogies en utilisant le gedcom, un format de fichier commun à la plupart des logiciels de généalogie. C'est un outil qui permet de créer un site sans pour autant avoir des compétences de ouf. D'une envergure plus modeste, PubliGED est constitué de trois parties : Blog, généalogie et administration.</p>
                            </div> 
                        </div>
                        
                        <div class="row">
                            <div class="col"> 

                                <h4 class="text-white mt-0">Votre site</h4>
                                <p class="text-white-50 mb-4 text-left">
                                - Publication d'articles<br />
                                - Liste des patronymes<br />
                                - Liste des individus<br />
                                - Liste éclair<br />
                                - Liste des événements<br />
                                - Liste des lieux <br />
                                - Géolocalisation<br />
                                - Fiches individuelles<br />
                                - Statistiques<br />
                                - Formulaire de contact<br />
                                - Liste des sources
                                </p>

                                <h4 class="text-white mt-0">Administration</h4>
                                <p class="text-white-50 mb-4 text-left">
                                - Gestion des articles<br />
                                - Gestion des catégories<br />
                                - Modération des commentaires<br />
                                - Envoi et suppression d'un gedcom<br />
                                - Gestion des modules<br />
                                - Suppression de la base de données<br />
                                - Statistique sur la base de données<br />
                                - Paramètres du site<br />
                                - Choix d'un thème<br />
                                - Personnalisation SEO
                                </p>

                            </div> 
                            <div class="col"> 

                                <h4 class="text-white mt-0">Fonctionnalités en projet</h4>
                                <p class="text-white-50 mb-4 text-left">
                                - Gestion des utilisateurs<br />
                                - Liste des images<br />
                                - Version anglaise<br />
                                - Anniversaires du jour<br />
                                - Mes ancêtres<br />
                                - Numérotation de sosa<br />
                                - Recherche d'un individu<br />
                                - Ajouter des références<br />
                                - Lier un article et un individu<br />
                                - Lignes de vie<br />
                                - Lignes de temps<br />
                                - Tableaux Excel<br />
                                - Blogroll des sites préférés<br />
                                - Albums photos<br />
                                - Liste des patronymes par lieu<br />
                                - Module social
                                </p>

                            </div>
                        </div> 

                        <!-- id="services" devient id="captures" -->

                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#captures" title="voir des captures d'écran de PubliGED">Voir des captures d'écran</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Les captures d'écran : intro -->
        <section class="page-section" id="captures" style="background-color: #d1cdc9;margin-bottom: -100px;">
            <div class="container">
                <h2 class="text-center mt-0">Captures d'écran</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text-muted mb-0">PubliGED n'est pas encore disponible en test.<br />En attendant, n'hésitez pas à suivre le projet sur <a href="https://twitter.com/boitasite" title="Le compte Twitter du développeur de PubliGED">Twitter</a>, <a href="https://www.linkedin.com/in/alexis-amand-99775817/" title="Le compte LinkedIn du développeur de PubliGED">LinkedIn</a> ou <a href="https://www.facebook.com/alexisamand" title="Le page Facebook du projet PubliGED">Facebook</a>.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Les captures d'écran : vignettes -->
        <div id="portfolio" style="background-color: #d1cdc9;">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture07.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture07.jpg" alt="Capture d'écran d'un blog créé avec le CMS PubliGED"/>
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Le blog</div>
                                <div class="project-name">Quelques articles</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture05.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture05.jpg" alt="Capture d'écran d'une fiche individuelle générée par le CMS PubliGED" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Fiche individuelle</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture02.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture02.jpg" alt="Capture d'écran de la liste de patronymes générée par le CMS PubliGED" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Liste des patronymes</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture03.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture03.jpg" alt="Capture d'écran d'une liste éclair générée par le CMS PubliGED" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Liste éclair</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture06.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture06.jpg" alt="Capture d'écran des statistiques d'un arbre généalogique publié avec PubliGED" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Les statistiques</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture08.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture08.jpg" alt="Capture d'écran de la présentation des sources" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Les sources</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture04.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture04.jpg" alt="Répartition géographique des individus avec OpenStreetMap" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">La généalogie</div>
                                <div class="project-name">Répartition géographique</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/capture01.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/capture01.jpg" alt="Capture d'écran d'un blog créé avec le CMS PubliGED" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Le blog</div>
                                <div class="project-name">Quelques articles</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/adm-capture03.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/adm-capture03.jpg" alt="Publier son Gedcom sur un site généré avec PubliGED" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">L'administration</div>
                                <div class="project-name">Encoyer un gedcom</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/adm-capture02.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/adm-capture02.jpg" alt="Modifier les articles de son blog généré avec PubliGED" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">L'administration</div>
                                <div class="project-name">Modifier les articles</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/adm-capture01.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/adm-capture01.jpg" alt="Gérer les modules de son site généré avec PubliGED" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">L'administration</div>
                                <div class="project-name">Gérer les modules</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 my-3" style="padding-right: 6px;padding-left: 6px;">
                        <a class="portfolio-box" href="images/grandes/adm-capture04.jpg">
                            <img class="img-fluid img-thumbnail" src="images/grandes/adm-capture04.jpg" alt="Page d'accueil du backoffice d'un site géré avec PubliGED" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">L'administration</div>
                                <div class="project-name">Résumé de mon site</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Téléchargements -->
        <section id="telechargement" class="page-section bg-dark text-white h-100">
            <div class="container text-center h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">

                    <div class="col-12">
                        <h2 class="mb-4">Téléchargement</h2>
                        <p class="text-white my-4">PubliGED n'est pas encore disponible en téléchargement.<br/>En attendant, n'hésitez pas à suivre le projet sur <a href="#contact" title="Contacter le développeur du cms PubliGED">les réseaux</a> et/ou à <a href="https://fr.tipeee.com/genealexis" title="Page Tipeee du projet PubliGED">le soutenir</a> !<br />(Les liens ci-dessous sont donc inactifs)<br />En attendant, le code est disponible sur <a href="https://github.com/AlexisAmand/PubliGED" title="Code source de PubliGED mise en ligne sur GitHub">GitHub</a>.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-house text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Téléchargement n°1</h3>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Téléchargement n°2</h3>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact-->
        <section id="contact" class="page-section bg-white h-100 text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">

                    <div class="col-12">
                        <h2 class="mt-0">Restons en contact !</h2>
                        <hr class="divider my-4" />
                        <p class="mb-5">Prêt à démarrer votre prochain site de généalogie ?<br />Envoyez-moi un message et je vous répondrai dans les plus brefs délais !<br /><a href="mailto:alexis.amand@gmail.com">alexis.amand@gmail.com</a></p>

                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-0 col-6">
                        <i class="fab fa-twitter fa-3x mb-3"></i>
                        <a class="d-block" href="https://twitter.com/PubliGED" title="Le compte Twitter du développeur de PubliGED">@PubliGED</a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-0 col-6">
                        <i class="fab fa-facebook fa-3x mb-3"></i>
                        <a class="d-block" href="https://www.facebook.com/Publiged" title="La page Facebook de PubliGED">@PubliGED</a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-0 col-6">
                        <i class="fab fa-linkedin fa-3x mb-3"></i>
                        <a class="d-block" href="https://www.linkedin.com/in/alexis-amand-99775817/" title="Le compte LinkedIn du développeur de PubliGED">@alexisamand</a>
                    </div>

                    <div class="col-lg-3 mb-5 mb-lg-0 col-6">
                        <i class="fab fa-github fa-3x mb-3"></i>
                        <a class="d-block" href="https://github.com/AlexisAmand/PubliGED" title="Le code source de PubliGED sur GitHub">Via GitHub</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center">Copyright © 2021<br />Site propulsé sur le net par <a href="https://www.boitasite.com">Boitasite</a></div></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
