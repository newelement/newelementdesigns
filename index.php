<?php
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    $email = filter_var( $_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var( $_POST['message'], FILTER_SANITIZE_STRING);
    mail('djones@newelementdesigns.com', 'New Element Designs Contact', $message, "FROM: $email");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>New Element Designs | Web Development and Design Winston Salem, NC Greensboro, NC 27101</title>
	<meta name="keywords" content="web design, web, design, development, angular, ionic, php, html, html5, css, css3, javascript, jquery, wordpress, expressionengine, cms, ecommerce, authorize.net, stripe, winston salem, greensboro, nc, north carolina">
	<meta name="description" content="Web Development and Design in Winston Salem, NC">
	<meta name="author" content="Don Jones">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>

    <header class="header">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 198.27 97.37">
            <path class="logo-color" d="M0,97.34,95.88,1.49s3.29-3.36,6.65,0L132.09,31,65.91,97.34H44L110.25,31.1,99.43,20.16,22.26,97.34Z"/>
            <polygon class="logo-color" points="75.88 97.3 137.2 36.05 198.27 97.34 176.58 97.37 137.09 57.55 129.73 64.85 160.16 97.34 139.5 97.34 118.39 76.12 110.96 83.68 124.58 97.3 75.88 97.3"/>
        </svg>
    </header>
    <!-- // #header -->

    <section class="intro">
        <h1 class="about-mini">New Element Designs. The portfolio of Don Jones.</h1>
        <h2 class="slogan">A Web Developer with a UX Mindset and Designer Tendencies.</h2>
    </section>

    <section class="portfolio-items">
        <ul>
            <li class="deltaploy">
                <div class="desc-overlay">
                    <h3>Deltaploy</h3>
                    <p>Application deployment service built on laravel. Utilizing Stripe, Slack, Postmark and other APIs.</p>
                    <p><a href="https://deltaploy.com" target="_blank">https://deltaploy.com</a></p>
                </div>
            </li>
            <li class="youfit">
                <div class="desc-overlay">
                    <h3>Virtual 5k</h3>
                    <p>A virtual 5k app that lets treadmill runners run with real live runners. Built on ionic 2, angular 2, and typescript. A BLE <a href="http://store.runsocial.com/products/treadtracker" target="_blank">Treadtracker</a> was used.</p>
                    <p><a href="#">View Demo Video</a></p>
                </div>
            </li>
            <li class="csx">
                <div class="desc-overlay">
                    <h3>The Intermodals</h3>
                    <p>
                        An educational site for CSX explaining how intermodals work.
                    </p>
                    <p>
                        <a href="http://theintermodals.com" target="_blank">http://theintermodals.com</a>
                    </p>
                </div>
            </li>
            <li class="wfu-magazine">
                <div class="desc-overlay">
                    <h3>Wake Forest Magazine</h3>
                    <p>
                        Online magazine for Wake Forest University. Wordpress Multisite integration and custom WP plugins.
                    </p>
                    <p>
                        <a href="http://magazine.wfu.edu" target="_blank">http://magazine.wfu.edu</a>
                    </p>
                </div>
            </li>
            <li class="maninis">
                <div class="desc-overlay">
                    <h3>Manini's</h3>
                    <p>
                        Gluten free food products. Woocommerce and Wordpress integration.
                    </p>
                    <p>
                        <a href="https://www.maninis.com/" target="_blank">https://www.maninis.com</a>
                    </p>
                </div>
            </li>
            <li class="phonetree">
                <div class="desc-overlay">
                    <h3>PhoneTree</h3>
                    <p>
                        Automated Phone Call and Text Messaging Software. Wordpress integration.
                    </p>
                    <p>
                        <a href="https://www.phonetree.com/" target="_blank">https://www.phonetree.com</a>
                    </p>
                </div>
            </li>
        </ul>
    </section>

    <section class="bio">
        <h2>About</h2>
        <p>
            With over 14 years of experience I understand many aspects that goes into a website. From UX to design to development, all 3 must work hand in hand.
        </p>
        <h3>Some of the Technologies I'm Currently Using</h3>
        <p>
            Angular 2, node, socket.io, typescript, Ionic 2, Cordova, PHP, Laravel, Wordpress, CSS, HTML, Gunt, Gulp, Webpack, Rollup and many APIs (I have an addition to them). These change often as I'm always learning new things.
        </p>
        <p>
            I also have a lot of experience with ecommerce. From custom product data to shipping fulfillment, utilizing many payment services, such as Stripe, Authorize.net (certified developer), TrustCommerce, Shopify, Square and more.
        </p>
    </section>

    <section class="contact">
        <h2>Contact</h2>
        <form action="index.php" method="post">
            <div class="form-row">
                <label for="email">Your Email</label>
                <input id="email" type="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>
            <div class="form-row">
                <label for="message">How Can I Help You?</label>
                <textarea id="message" required="required"></textarea>
            </div>
            <div class="submit-message"></div>
            <button class="submit-contact-button" type="submit" name="button">Send</button>
        </form>
    </section>

    <footer class="footer">
        <?php date_default_timezone_set('EST'); ?>
        <div class="copyright">&copy; 2002 &ndash; <?php echo date("Y"); ?> New Element Designs</div>

        <div class="footer-links">
            <a href="https://twitter.com/newelement" target="_blank">Twitter</a> <a href="https://github.com/newelement" target="_blank">Github</a>
        </div>
    </footer>
    <!-- / #footer -->

    <script>
    	var _gaq=[['_setAccount','UA-63794-1'],['_trackPageview']];
    	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    	s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    <script src="assets/all.js"></script>

</body>
</html>
