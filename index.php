<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <!-- TODO: Update Title -->
        <title>Trichema</title>
        <!-- TODO: Update meta description -->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">

            <header id="navtop">
                <a href="index.php" class="logo fleft">
                    <img src="img/logo.png" alt="Trichema">
                </a>

                <nav class="fright">
                    <ul>
                        <li><a href="/" class="navactive">Home</a></li>
                        <li><a href="about.html">About</a></li> <!-- TODO: Change href to .php -->
                    </ul>
                    <ul>
                        <li><a href="products.html">Products</a></li> <!-- TODO: Change href to .php -->
                        <li><a href="contact.html">Contact</a></li> <!-- TODO: Change href to .php -->
                    </ul>
                </nav>
            </header>

            <div class="home-page main">
                <section class="grid-wrap" >
                    <header class="grid col-full">
                        <p class="fleft">Home</p>
                        <a href="about.html" class="arrow fright">see more about Trichema</a>
                    </header>

                    <div class="grid col-full mq2-col-full aligncenter">
                        <img class="aligncenter" src="img/head1.jpg" alt="Trichema">
                    </div>

                    <div class="grid col-full mq2-col-full aligncenter">
                        <h1>Chemicals</h1>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit.</p>
                        <p>Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum.</p>
                        <p>Nunquam captis aonides.A falsis, guttus camerarius nix.Fluctuss cantare, tanquam festus musa.Lixas messis in emeritis cubiculum!Quadra germanus species est.Adelphiss persuadere!Est alter compater, cesaris.</p>
                        <p>Nunquam captis aonides.A falsis, guttus camerarius nix.Fluctuss cantare, tanquam festus musa.Lixas messis in emeritis cubiculum!Quadra germanus species est.Adelphiss persuadere!Est alter compater, cesaris.</p>
                        <p>Nunquam captis aonides.A falsis, guttus camerarius nix.Fluctuss cantare, tanquam festus musa.Lixas messis in emeritis cubiculum!Quadra germanus species est.Adelphiss persuadere!Est alter compater, cesaris.</p>
                    </div>
                </section>
            </div>

            <div class="divide-top">
                <footer class="grid-wrap">
                    <ul class="grid col-one-third social">
                        <li>&copy;<?php echo date("Y"); ?> <a href="" title="Trichema">Trichema</a></li>
                        <li>Site powered by <a href="http://www.emerl.co.uk/" target="_blank" title="Site powered by eMerl">eMerl</a></li>
                    </ul>

                    <div class="up grid col-one-third ">
                        <a href="#navtop" title="Go to top of page">&uarr;</a>
                    </div>

                    <nav class="grid col-one-third ">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="about.html">About</a></li> <!-- TODO: Change href to .php -->
                            <li><a href="products.html">Services</a></li> <!-- TODO: Change href to .php -->
                            <li><a href="contact.html">Contact</a></li> <!-- TODO: Change href to .php -->
                        </ul>
                    </nav>
                </footer>
            </div> <!-- .divide-top -->
        </div> <!-- .container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/scripts.js"></script>

            <!-- TODO: Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
