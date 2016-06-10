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
<div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand" href="">Auto Dakar</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-main">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="">Home</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">Page 1
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="" class="asd">Page 1-1</a></li>
                            <li><a href="">Page 1-2</a></li>
                            <li><a href="">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="fa fa-user"></span> Sign Up</a></li>
                    <li><a href="#"><span class="fa fa-sign-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </div>
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

<!-- Left and right Columns -->
<div class="container body-margin ">
    <div class="row">
        <div class="limit">
            <hr>
        </div>
<div class="container body-content">
    <div class="row ">
        <div class="col-sm-4 left-column">

            <h1>Title - Some Evil text here</h1>
            <hr>
            <div class="col-sm-1">
            </div>
            <div class="col-sm-11">
                <p>Text comes here </p>
                <p>even more comes here</p>
                <br>
                <p>just try</p>
            </div>

        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-7 right-column">
            <h1>Title - Some  EVIL  text here and there and everywhere</h1>
            <hr>
            <div class="col-sm-1">
            </div>
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
<!-- Footer -->
<footer class="container-fluid footer_style">
    <div class="row">
        <div class="container">
            <hr>
            <div class="col-sm-4">
                <div class="footer-columns">

                    <span class="fa fa-circle-o-notch">
                        <span>TEAM</span>
                    </span>

                    <p>Our HighSchool</p>
                    <p>Teachers</p>
                    <p>Parteners</p>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-columns">

                    <span class="fa fa-comment">
                        <span> CONTACT</span>
                    </span>

                    <p>+0786941315</p>
                    <p>FACEbook and stuff</p>
                    <p>along with pictures</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="footer-columns">

                    <span class="fa fa-shield">
                        <span> CODE CLUB</span>
                    </span>

                    <p>Google-maps</p>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <span>@ Code Club - 2016</span>
            </div>

        </div>

    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>