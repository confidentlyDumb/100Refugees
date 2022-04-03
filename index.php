<?php
session_start();

/**
 * TODO: translate /php/lang/dk.json and /php/lang/ua.json.
 * Do not make any changes to the structure of objects.
 */

$_SESSION['lang'] = !isset($_SESSION['lang']) ? 'ua' : $_SESSION['lang'];

$pagenow = $_SERVER['REQUEST_URI'];
$lang    = $_SESSION['lang'];
$text    = json_decode(file_get_contents("php/lang/{$lang}.json"));

require_once "php/env.php";
require_once "php/helpers.php";
require_once "php/content.php";

?>

<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="<?php echo $lang; ?>">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>100Refugees</title>
    <meta name="description" content="<?php echo $text->hero->hed1; ?>">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php styles_build($styles);
          scripts_build($h_scripts); ?>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

    <?php include_once "partials/header.php";

          include_once strpos($pagenow, "data-processing") ? "partials/cookies.php"
                    : (strpos($pagenow, "contact")         ? "partials/contact.php"
                    : (strpos($pagenow, "help-us")         ? "partials/help-us.php"
                    : (strpos($pagenow, "about")           ? "partials/about.php"
                    : (strpos($pagenow, "?lang")           ? "php/session.php"
                                                           : "partials/home.php"))));
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
      <?php if (!strpos($pagenow, 'data-processing')) { ?>
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
    
    /**
     * Animated blue & yellow birds for the "HOW WE HELP"
     * section. See the instructions on how to customise
     * the plugin at https://www.vantajs.com/
     */
    if ($pagenow == '/') { ?>
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
          colorMode: "lerpGradient",
          quantity: 1.00
        })
        </script>
    <?php } ?>

</body>

</html>