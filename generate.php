<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Créer votre programmation idéale pour le MainSquare 2016</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta property="og:locale:alternate" content="fr_FR" /> 
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Créer votre programmation pour le MainSquare 2016 !" />
    <meta property="og:description"   content="Programmez VOTRE MainSquare et soumettez le à vos amis !" />
    <meta property="og:image"         content="http://arrasmainsquare-epsi.fr/img/mainsquare-1024x683.jpg" />
    <link rel="icon" type="image/png" href="/media/layout/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
	<link href="css/screen.css" rel="stylesheet" type="text/css" /> 
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
	<link href="css/screen.css" rel="stylesheet" type="text/css" />

    <script src="https://fb.me/react-0.13.2.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.2.js"></script>
    <script type="text/jsx;harmony=true" src="js/app.js"></script>

</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="bg">
        <br><br>
        <div class="container-fluid">
            <div class="row text-center">
                <h1><small>ARRAS</small>MAINSQUARE<small>EPSI</small></h1>
                <h2>Partagez votre programmation préférée sur vos réseaux sociaux !</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Jour 1 <small>Vendredi 1 juillet</small></h3>
                    <div id="day-one">
                        <ul class="day-detail">
    <?php
        if(!empty($_GET['day1'])) {
            $day1 = explode('|', $_GET['day1']);
            foreach ($day1 as $artist) {
                echo "<li><span><p>" . $artist . "</p></span></li>";
            }
        }
    ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <h3>Jour 2 <small>Samedi 2 juillet</small></h3>
                    <div id="day-two">
                        <ul class="day-detail">
    <?php
        if(!empty($_GET['day2'])) {
            $day1 = explode('|', $_GET['day2']);
            foreach ($day1 as $artist) {
                echo "<li><span><p>" . $artist . "</p></span></li>";
            }
        }
    ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                     <h3>Jour 3 <small>Dimanche 3 juillet</small></h3>
                    <div id="day-three">
                        <ul class="day-detail">
    <?php
        if(!empty($_GET['day3'])) {
            $day1 = explode('|', $_GET['day3']);
            foreach ($day1 as $artist) {
                echo "<li><span><p>" . $artist . "</p></span></li>";
            }
        }
    ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="post-share">
                <a target="_blank" title="Facebook" href="https://www.facebook.com/sharer.php?http://arrasmainsquare-epsi.fr?<?php echo $_SERVER['REQUEST_URI']?>&amp;t=Create Your Line up !" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');trackEvent('share', 'clic-share', 'clic-share-facebook');return false;" class="btn-share-fb">Facebook</a>
                <a target="_blank" title="Twitter" href="https://twitter.com/share?http://arrasmainsquare-epsi.fr?<?php echo $_SERVER['REQUEST_URI']?>&amp;text=Create Your Line up !&amp;via=polecom_arras&amp;hashtags=MainSquare2016" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');trackEvent('share', 'clic-share', 'clic-share-twitter');return false;" class="btn-share-tw">Twitter</a>
            </div>
        </div>
    </div>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/getArtists.js" type="text/javascript"></script>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70942845-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
