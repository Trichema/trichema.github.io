<?php
/**
 * Created by PhpStorm.
 * User: joenyland
 * Date: 11/01/2014
 * Time: 20:00
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Our Products | Trichema</title>
    <meta name="description" content="View our product catalogue to see how we can help you">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="container">

    <header id="navtop">
        <a href="/" class="logo fleft">
            <img src="assets/img/logo.png" alt="Trichema">
        </a>

        <nav class="fright">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
            <ul>
                <li><a href="products.html" class="navactive">Products</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="about-page main grid-wrap">

        <header class="grid col-full">
            <p class="fleft">Products</p>
        </header>

        <section class="grid col-full">
            <img src="assets/img/head4.jpg" alt="" class="aligncenter">

                <h2>Our products</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit.</p>
                <p>Please take a look at our product catalogue by clicking the button below:</p>
                <a href="http://www.avantormaterials.com/search.aspx?searchtype=products" target="_blank" class="button">Click here</a>
        </section>

    </div>

    <div class="divide-top">
        <footer class="grid-wrap">
            <ul class="grid col-one-third social">
                <li>&copy;<?php echo date("Y"); ?> <a href="/" title="Trichema">Trichema</a></li>
                <li>Site powered by <a href="http://www.emerl.co.uk/" target="_blank" title="Site powered by eMerl">eMerl</a></li>
            </ul>

            <div class="up grid col-one-third ">
                <a href="#navtop" title="Go to top of page">&uarr;</a>
            </div>

            <nav class="grid col-one-third ">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="products.php">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </footer>
    </div> <!-- .divide-top -->
</div> <!-- .container -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/scripts.js"></script>

<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-46856273-1');ga('send','pageview');
</script>
</body>
</html>
