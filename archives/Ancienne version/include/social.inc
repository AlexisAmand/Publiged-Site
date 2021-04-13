<!-- mise en garde cookies -->

<script src="/cookies/cookiechoices.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', function(event) {
    cookieChoices.showCookieConsentBar('En naviguant sur le site, vous acceptez l’utilisation de cookies pour vous proposer une navigation optimale et me permettre de réaliser des statistiques de visites.',
      'Ok', 'En savoir plus', '/cookies/cookies.php');
  });
</script>

<!-- barre reseaux sociaux -->

<div id="social_bar">

<!-- bouton Facebook -->
<a href="http://www.facebook.com/genealexis.fr" title="Allez sur la page Facebook de Genealexis">
<img src="../socialbar/facebook.png" width="50" height="50" alt="Voir la page facebook du site"/>
</a>

<br>

<?php 

$UrlPage = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
/*$UrlPage = "http://127.0.0.1";*/

?>

<!-- bouton LinkedIn -->
<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $UrlPage; ?>&title=<?php echo $TitrePage; ?>" title="partager la page sur LinkedIn">
<img src="../socialbar/linkedin.png" width="50" height="50" alt="partager la page sur LinkedIn"/></a>

<br>

<!-- bouton Twitter -->
<a href="http://twitter.com/share" data-url="<?php echo $UrlPage; ?>" data-text="<?php echo $TitrePage; ?>" data-count="horizontal" data-lang="fr" title="partager la page sur Twitter">
<img src="../socialbar/twitter.png" width="50" height="50" alt="partager la page sur Twitter"/></a>
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<br>

<!-- bouton google+ -->
<a href="https://plus.google.com/share?url=<?php echo $UrlPage; ?>" title="partager la page sur Google+">
<img src="../socialbar/google.png" width="50" height="50" alt="partager la page sur Google+"/> </a>

</div>

<script type="text/javascript">
hauteur = document.documentElement.clientHeight;
document.getElementById('social_bar').style.marginTop = (hauteur  - document.getElementById('social_bar').offsetHeight) / 2 +"px";
</script>