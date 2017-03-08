<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./wp-content/themes/bergclub-theme/style.css">
</head>

<body>
<div id="myCarousel" class="carousel slide header-carousel" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#headerCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#headerCarousel" data-slide-to="1"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="header-img" src="./wp-content/themes/bergclub-theme/berg1.jpg" alt="Berg Landschaft">
        </div>

        <div class="item">
            <img class="header-img" src="./wp-content/themes/bergclub-theme/berg2.jpg" alt="Berg Landschaft">
        </div>
    </div>
</div>

<img class="header-logo" src="./wp-content/themes/bergclub-theme/BergclubBernLogo.png" alt="Logo">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bergclub Bern</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Startseite</a></li>
                <li><a href="#about">Über Uns</a></li>
                <li><a href="#contact">Kontakt</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</div><!-- /.container -->


<!-- Latest compiled and minified Bootstrap & jQuery JavaScript -->
<!-- This is placed at the end for performance reasons -->
<script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
