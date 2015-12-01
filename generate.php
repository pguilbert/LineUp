<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Create your line up!</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="icon" type="image/png" href="/media/layout/favicon.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
	<link href="css/screen.css" rel="stylesheet" type="text/css" /> 
	<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" /> 
	<link href="css/screen.css" rel="stylesheet" type="text/css" />

    <script src="https://fb.me/react-0.13.2.js"></script>
    <script src="https://fb.me/JSXTransformer-0.13.2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/marked/0.3.2/marked.min.js"></script>
    <script type="text/jsx;harmony=true" src="js/components/DayBox.js"></script>
    <script type="text/jsx;harmony=true" src="js/components/ArtistList.js"></script>
    <script type="text/jsx;harmony=true" src="js/components/ArtistForm.js"></script>
    <script type="text/jsx;harmony=true" src="js/components/Artist.js"></script>
    <script type="text/jsx;harmony=true" src="js/app.js"></script>

</head>
<body>
    <br><br>
    <div class="container-fluid">
        <div class="row text-center">
            <h1><small>ARRAS</small>MAINSQUARE<small>EPSI</small></h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3>Jour 1 <small>Vendredi 1 juillet</small></h3>
                <div id="day-one"></div>
            </div>
            <div class="col-md-4">
                 <h3>Jour 2 <small>Samedi 2 juillet</small></h3>
                <div id="day-two"></div>
            </div>
            <div class="col-md-4">
                 <h3>Jour 3 <small>Dimanche 3 juillet</small></h3>
                <div id="day-three"></div>
            </div>
        </div>
    </div>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/getArtists.js" type="text/javascript"></script>
</body>
</html>
