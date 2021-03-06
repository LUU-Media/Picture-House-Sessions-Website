<?php
    // Get page from variable
    if(isset($_GET["page"]) && ($_GET["page"] !== "")) {
        $page = htmlspecialchars($_GET["page"]);
    } else {
        $page = "home";
    }

    // Check if page exists - if not send to 404
    if(!file_exists("./pages/$page.php")) {
        $page = "404";
    }

    // This is nasty but makes later on easier
    if($page == "home") {
        $home = true;
    }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Picture House Sessions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,400i,700,700i" rel="stylesheet">


</head>

<body>
    <div class="hero-full-screen">
        <?php if($home) { echo"<video loop muted autoplay><source src=\"./assets/video/background.mp4\" type=\"video/mp4\"></video>";} ?>

        <div class="top-content-section">
            <div class="title-bar" data-responsive-toggle="nav" data-hide-for="medium">
                <a href="./"><img src="./assets/img/picture-house.png" class="nav-logo left" /></a>
                <div class="title-bar-right">
                    <button class="menu-icon" type="button" data-toggle></button>
                </div>
            </div>
            <div class="top-bar" id="nav">
                <div class="top-bar-left">
                    <ul class="vertical medium-horizontal menu" data-responsive-menu="accordion medium-dropdown">
                        <li class="menu-text show-for-medium"><a href="./" class="logo"><img src="./assets/img/picture-house.png" alt="Picture House Sessions" /></a></li>
                        <li><a href="./" class="nav-active">Home</a></li>
                        <li><a href="./?page=about">About</a></li>
                        <li><a href="./?page=bands">Bands</a></li>
                        <li><a href="./?page=redeem">Redeem Code</a></li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu">
                        <li><a href="http://cpwm.awesomedistro.com/products/611162-leeds-student-radio-come-play-with-me-presents-picture-house-sessions">Buy the EP</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="middle-content-section <?php if(!$home) {echo "page"; } ?>">
            <?php if(!$home) { echo "<h1 style='display: none;'>Picture House Sessions</h1>"; /* How to be standards compliant and still entirely miss the point in one easy step! */ } ?>
            <?php require_once "./pages/$page.php"; ?>
        </div>
        <div class="bottom-content-section" data-magellan data-threshold="0"></div>

    </div>
    <div class="footer">
        <div class="grid-container">
            <div class="grid-x grid-margin-x footer-credits-grid">
                <div class="cell small-12">
                    <span class="footer-credits">Produced by</span>
                    <div class="grid-x grid-margin-x">
                        <div class="auto cell"></div>
                        <div class="cell small-3 medium-1"><a href="http://thisislsr.com"><img src="./assets/img/lsr-logo.png" class="footer-logo" alt="Leeds Student Radio" /></a></div>
                        <div class="cell small-3 medium-1"><a href="http://www.hydeparkpicturehouse.co.uk"><img src="./assets/img/hpph-logo.png" class="footer-logo" alt="Hyde Park Picture House" /></a></div>
                        <div class="cell small-3 medium-1"><a href="http://cpwm.co"><img src="./assets/img/cpwm-logo.png" class="footer-logo" alt="Come Play With Me" /></a></div>
                        <div class="cell small-3 medium-1"><a href="https://www.facebook.com/LSRSoundSessions/"><img src="./assets/img/soundsessions-logo.png"" class="footer-logo" alt="LSR Sound Sessions" /></a></div>
                        <div class="auto cell"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="bottom-footer-copyright">&copy; Leeds Student Radio 2018<br />Website made with <span style="color:#ff005a">❤</span> by <a href="http://jackbiggin.me">Jack Biggin</a></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/what-input/5.0.3/what-input.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
    <script>
        $(document).foundation();

    </script>

</body>

</html>