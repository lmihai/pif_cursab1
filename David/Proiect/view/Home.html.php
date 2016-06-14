<!DOCTYPE html>
<html>
<head>
<script src="https://use.fontawesome.com/b04553d448.js"></script>


	<title><?php print $_GET['page']?></title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="assets/css/carousel.css" >
<link rel="stylesheet" type="text/css" href="assets/css/home.css"/>

</head>
<body>
<!-- Header - menu -->
<?php include "templates/Header_menu.php" ?>

<!-- Container carousel -->

<div class="container">
    <div class="row">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="assets/img/slide1.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">

                            <p><a class="btn btn-lg btn-primary" href="https://data.gov.ro/" role="button" target="_blank">Data.Gov.ro </a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="assets/img/slide2.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">

                            <p><a class="btn btn-lg btn-primary" href="https://www.data.gov/" role="button" target="_blank">Data.gov</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="assets/img/slide3.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">

                            <p><a class="btn btn-lg btn-primary" href="https://open-data.europa.eu/en/data/" role="button" target="_blank">Open.Data.Europe</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#Carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#Carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- End Carousel -->

<!-- Left and right Columns -->
<div class="container body-margin ">
    <div class="row">
        <div class="limit">
            <hr>
        </div>
        <div class="container body-content">
            <div class="row ">

    <!-- Left Column -->
                <div class="col-sm-4 left-column">

                    <h1>Title - Some Evil text here</h1>
                    <hr>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">
                        <p>Text comes here </p>
                        <p>even more comes here</p>
                        <!-- <br> -->
                        <p>just try</p>
                    </div>

                </div>
                <!-- Space Between columns -->
                <div class="col-sm-1"></div>

    <!-- Right Column -->

                <div class="col-sm-7 right-column">
                    <h1>Title - Some  EVIL  text here and there and everywhere</h1>
                    <hr>

                    <div class="col-sm-1"></div>

                    <div class="col-sm-11">
                        <p>Text comes here </p>
                        <p>even more comes here</p>
                        <br>
                        <p>just try</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Columns -->

<!-- Footer -->
<?php include "templates/Footer.php";  ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>