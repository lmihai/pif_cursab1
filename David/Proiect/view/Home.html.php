<!DOCTYPE html>
<html>
<head>
	<title><?php print $_GET['page']?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="assets/css/carousel.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/css/home.css"/>
</head>
<body>

<div class="navbar-wrapper">

    <nav class="navbar navbar-static-top navbar-inverse">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navCollapse" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=home">
                    <img class="logo" alt="Brand" src="assets/img/logo.png"> 
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href=""><?php print $_GET['page'] ?> <span class="sr-only">(current)</span></a></li>
                    <li><a href="?page=service">Service</a></li>
                    <li><a href="?page=blog">Blog</a></li>
                    <li><a href="?page=review">Review</a></li>
                    <li><a href="?page=contact">Contact</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
</div>

<?php
if($_GET['page']=='home' || $_GET['page']=='service'){  
  include 'carousel.php';
  print $carousel;
}
?>



<div class="button-centru">
 <a href="?page=service">
  <div class="btn btn-default btn-lg btn-block"> 
     Plaseaza comanda 
  </div>
</a>
</div>

<div class="container">

  <div class="row">
    <div class="col-xs-4">
      Service
    </div>
    <div class="col-xs-4">
      Review
  </div>

  <div class="col-xs-4">
      Contact
  </div>
  </div>
  


</div>
<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>