<?php
session_start();

$_SESSION['lang'] = !isset($_SESSION['lang']) ? 'en' : $_SESSION['lang'];
$lang = $_SESSION['lang'];

$text = json_decode(file_get_contents("php/lang/{$lang}.json"));

require_once "php/env.php";
require_once "php/helpers.php";
require_once "php/content.php";

?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>100Refugees</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php styles_build($styles);
          scripts_build($h_scripts); ?>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <?php include_once "partials/header.php";

          include_once strpos($_SERVER['REQUEST_URI'], "data-processing") ? "partials/cookies.php"
                       : (strpos($_SERVER['REQUEST_URI'], "contact")      ? "partials/contact.php"
                       : (strpos($_SERVER['REQUEST_URI'], "help-us")      ? "partials/help-us.php"
                       : (strpos($_SERVER['REQUEST_URI'], "about")        ? "partials/about.php"
                                                                          : "partials/home.php")));
          include_once "partials/footer.php"; ?>

    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <?php for ($i = 0; $i < 5; $i++) { ?> <div></div> <?php } ?>
            </div>
        </div>
    </div>

    <?php scripts_build($f_scripts); ?>

    <?php /*  Alex 30.30.2022: This won't show on the frontend unless uncommented,
              and sits here just in case. Uncomment typed.js in content.php and add
              corresponding ID's to HTML to use it (<span>'s suggested in order to
              prevent unintended linebreaks).

    <script type="text/javascript">
      <?php if (!strpos($_SERVER['REQUEST_URI'], 'data-processing')) { ?>
      var typed1 = new Typed('#typed1', {
        strings: ['<?php echo $text->hero->sub1; ?>'],
        typeSpeed: 75,
        backSpeed: 45,
        smartBackspace: true,
        loop: true
      }),
      typed2 = new Typed('#typed2', {
        strings: ['<a class="yellow" href="http://naergard.com">Nærgaard</a>', 
                  '<a class="yellow" href="http://CharlesRobotics.com">CharlesRobotics</a>',
                  '<a class="yellow" href="http://CarWashingRobots.com">CarWashingRobots</a>'],
        typeSpeed: 75,
        backSpeed: 45,
        smartBackspace: true,
        loop: true
      });
      <?php } else { ?>
      var typed3 = new Typed('#typed3', {
        strings: ['<?php echo $text->cookies->sub1; ?>'],
        typeSpeed: 75,
        backSpeed: 45,
        smartBackspace: true,
        loop: true
      });
      <?php } ?>
    </script> */
    
    if ($_SERVER['REQUEST_URI'] == '/') { ?>

        <script src="/js/three.r119.min.js"></script>
        <script src="/js/vanta.birds.min.js"></script>
        <script>
        VANTA.BIRDS({
          el: "#services",
          mouseControls: true,
          touchControls: true,
          gyroControls: false,
          minHeight: 200.00,
          minWidth: 200.00,
          scale: 1.00,
          scaleMobile: 1.00,
          backgroundColor: 0xffffff,
          color1: 0xffda34,
          color2: 0x348cff,
          quantity: 1.00
        })
        </script>
    <?php } ?>

</body>

</html>