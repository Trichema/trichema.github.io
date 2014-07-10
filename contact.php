<?php
/**
 * Created by PhpStorm.
 * User: joenyland
 * Date: 11/01/2014
 * Time: 21:44
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Contact Us | Trichema</title>
    <meta name="description" content="Get in touch with Trichema to discuss how we can help you">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' type='text/css'>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-touch-icon-76x76.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/assets/img/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/assets/img/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-square70x70logo" content="/assets/img/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/assets/img/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/assets/img/mstile-310x150.png">
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
                <li><a href="about.html">About</a></li>
            </ul>
            <ul>
                <li><a href="products.php">Products</a></li>
                <li><a href="contact.php" class="navactive">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div class="contact-page main grid-wrap">

        <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full">

            <p class="mbottom">Get in touch with Trichema to discuss how we can help you.</p>

            <address class="mbottom">
                <h5>Trichema</h5>
                31 Victoria Road<br>
                Grappenhall<br>
                Warrington<br>
                <a href="http://maps.google.com/maps?saddr=31+Victoria+Road,+Grappenhall,+Warrington,+United+Kingdom" target="_blank">Get directions</a>
            </address>

            <p class="mbottom">
                Tel: <a href="tel://+441925266036">(+44) 1925 266036</a><br>
                Fax: <a href="tel://+441925600134">(+44) 1925 600134</a>
            </p>
            <p class="mbottom">
                <a href="mailto:sales@trichema.co.uk">sales@trichema.co.uk</a><br>
            </p>
            <p>
            <h6>Opening hours: </h6>
            Monday - Friday<br>
            09:00am - 5:00pm
            </p>

        </aside>

        <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
            <?php
            if (isset($_POST['submit'])) {
                require_once('includes/recaptchalib.inc.php');
                $privatekey = "6LfvE-0SAAAAAG1bpKR7N12Q4p4mFnJ9GaNuRmYV";
                $resp = recaptcha_check_answer ($privatekey,
                    $_SERVER["REMOTE_ADDR"],
                    $_POST["recaptcha_challenge_field"],
                    $_POST["recaptcha_response_field"]);

                if (!$resp->is_valid) {
                    // CAPTCHA was entered incorrectly
                    echo "<h2>Sorry, the reCAPTCHA verification code wasn't entered correctly.</h2>";
                    echo "<p>Please go back and answer the security question at the bottom of the form again.</p>";
                    echo "<a href='javascript:history.go(-1)'>Click here to try again.</a>";
                } else {
                    // CAPTCHA was entered correctly - send email
                    $to = "sales@trichema.co.uk";
                    $from = "no-reply@trichema.co.uk";
                    $subject = "Trichema website enquiry";
                    $headers = "From: $from" . "\r\n" .
                        "Reply-To: $_REQUEST[email]" . "\r\n" .
                        "X-Mailer: php";
                    unset($_REQUEST['recaptcha_challenge_field'], $_REQUEST['recaptcha_response_field'], $_REQUEST['submit']); // unset() some keys in the array that we don't want.
                    foreach ($_REQUEST as $key => $val) {
                        $body .= ucfirst($key) . ": " . $val . "\r\n"; // ucfirst() the keys to make the first letter capital.
                    }
                    mail($to, $subject, $body, $headers, "-f" . $from); //send the mail
                    echo "<h2>Thank you, your message has been sent.</h2>";
                    echo "<p>A member of our sales team will be in touch with you as soon as possible.</p>";
                    echo "<p><a href='/'>Click here to go back to the home page.</a></p>";
                }

            } else {
                ?>
                <script type="text/javascript">
                    // Set the reCAPTCHA theme
                    var RecaptchaOptions = {
                        theme : 'white'
                    };
                </script>
                <h3>Send us a message:</h3>
                <form id="contact_form" class="contact_form" action="contact.php" method="post" name="contact_form">
                    <?php
                    require_once('includes/recaptchalib.inc.php');
                    $publickey = "6LfvE-0SAAAAAPph6WG_33boWj4tOyYkQNrU6YNg";
                    ?>
                    <ul>
                        <li>
                            <label for="name">Your name:</label>
                            <input type="text" name="name" id="name" placeholder="Please enter your name here..." required class="required" >
                        </li>
                        <li>
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" required placeholder="Please enter your email address here..." class="required email">
                        </li>
                        <li>
                            <label for="message">Message:</label>
                            <textarea name="message" id="message" cols="100" rows="6" required  class="required" placeholder="Please enter your message here...."></textarea>
                        </li>
                        <li>
                            <label for="message">Verification:</label>
                            <?php echo recaptcha_get_html($publickey); ?>
                        </li>
                        <li>
                            <button type="submit" id="submit" name="submit" class="button fright">Send Message</button>
                        </li>
                    </ul>
                </form>
        </section>
            <?php } ?>
    </div> <!--main-->
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
                    <li><a href="about.html">About</a></li>
                    <li><a href="products.php">Products</a></li>
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
