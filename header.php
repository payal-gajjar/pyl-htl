<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<?php 
/* define constant variable for url*/
define("HOMEPATH", "http://192.168.1.30/studio-52");

/* set the condition for all pages title and body class*/
if (stripos($_SERVER['REQUEST_URI'], 'about-us.php')){
    echo '<title>About Us</title>';
    $bodyClass = 'about-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
    /* set the menu active class*/
    $home_menuActive = '';
    $about_menuActive = 'active';
    $services_menuActive = '';
    $insights_menuActive = '';
    $contact_menuActive = '';
} elseif(stripos($_SERVER['REQUEST_URI'], 'services.php')){
    echo '<title>Services</title>';
    $bodyClass = 'services-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
    /* set the menu active class*/
    $home_menuActive = '';
    $about_menuActive = '';
    $services_menuActive = 'active';
    $insights_menuActive = '';
    $contact_menuActive = '';
} else if(stripos($_SERVER['REQUEST_URI'], 'insights.php')){
    echo '<title>Insights</title>';
    $bodyClass = 'insights-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
    /* set the menu active class*/
    $home_menuActive = '';
    $about_menuActive = '';
    $services_menuActive = '';
    $insights_menuActive = 'active';
    $contact_menuActive = '';
} else if(stripos($_SERVER['REQUEST_URI'], 'contact-us.php')){
    echo '<title>Contact Us</title>';
    $bodyClass = 'contact-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
    /* set the menu active class*/
    $home_menuActive = '';
    $about_menuActive = '';
    $services_menuActive = '';
    $insights_menuActive = '';
    $contact_menuActive = 'active';
} else if(stripos($_SERVER['REQUEST_URI'], 'video-service.php')){
    echo '<title>Promotional Video Productions</title>';
    $bodyClass = 'video-production-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/video-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/video-footer-logo.png';
}  else if(stripos($_SERVER['REQUEST_URI'], '3d-animation.php')){
    echo '<title>3D Animation</title>';
    $bodyClass = 'animation-service-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/animation-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/animation-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'access-control-system.php')){
    echo '<title>Access Control System</title>';
    $bodyClass = 'access-control-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'audio.php')){
    echo '<title>Audio</title>';
    $bodyClass = 'audio-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/audio-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/audio-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'digital.php')){
    echo '<title>Digital</title>';
    $bodyClass = 'digital-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/digital-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/digital-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'download.php')){
    echo '<title>Download</title>';
    $bodyClass = 'download-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'drone.php')){
    echo '<title>Drone</title>';
    $bodyClass = 'drone-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/drone-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/drone-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'event.php')){
    echo '<title>Event</title>';
    $bodyClass = 'event-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/event-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/event-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'explosion-proof-camera-system.php')){
    echo '<title>Explosion Proof Camera</title>';
    $bodyClass = 'ex-proof-cctv-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'film-permit.php')){
    echo '<title>Film Permit</title>';
    $bodyClass = 'flim-permit-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/filmpermit-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/filmpermit-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'fork-view-camera.php')){
    echo '<title>Fork View Camera</title>';
    $bodyClass = 'fork-view-camera-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'forklift-camera-system.php')){
    echo '<title>Forklift Camera System</title>';
    $bodyClass = 'forklift-camera-and-sensor-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'forklift-speed-limiter.php')){
    echo '<title>Forklift Speed Limiter</title>';
    $bodyClass = 'forklift-speed-limiter-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'ivr.php')){
    echo '<title>IVR</title>';
    $bodyClass = 'ivr-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'media-library.php')){
    echo '<title>Media Library</title>';
    $bodyClass = 'media-library-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'photography.php')){
    echo '<title>Photography</title>';
    $bodyClass = 'photography-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/photography-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/photography-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'safety.php')){
    echo '<title>Safety</title>';
    $bodyClass = 'safety-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/safety-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/safety-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'solar-camera.php')){
    echo '<title>Solar Camera</title>';
    $bodyClass = 'solar-camera-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'technology.php')){
    echo '<title>Technology</title>';
    $bodyClass = 'technology-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/technology-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/technology-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'testimonials.php')){
    echo '<title>Testimonials</title>';
    $bodyClass = 'testimonials-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'timelapse.php')){
    echo '<title>Timelapse</title>';
    $bodyClass = 'timelapse-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/headerlogo/timelapse-header-logo.png';
    $footerlogoUrl = 'images/footerlogo/timelapse-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'voice-artist.php')){
    echo '<title>Voice Artist</title>';
    $bodyClass = 'voice-artist-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
} else if(stripos($_SERVER['REQUEST_URI'], 'telephone-hold-messages.php')){
    echo '<title>Telephone Hold Messages</title>';
    $bodyClass = 'telephone-hold-messages-page';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
 } else if(stripos($_SERVER['REQUEST_URI'], 'dubbing.php')){
    echo '<title>Dubbing</title>';
    $bodyClass = 'dubbing';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';

 } else if(stripos($_SERVER['REQUEST_URI'], 'radio-commercial.php')){
    echo '<title>Radio Commercial</title>';
    $bodyClass = 'radio-commercial';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';

 } else if(stripos($_SERVER['REQUEST_URI'], 'career.php')){
    echo '<title>Career</title>';
    $bodyClass = 'cereer';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';

 } else if(stripos($_SERVER['REQUEST_URI'], '360.php')){
    echo '<title>360</title>';
    $bodyClass = 'cities';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
 }  else {
    echo '<title>Home</title>';
    $bodyClass = 'home';
    /* set the logo for header and footer */
    $headerlogoUrl = 'images/home-header-logo.png';
    $footerlogoUrl = 'images/homepage/home-footer-logo.png';
    /* set the menu active class*/
    $home_menuActive = 'active';
    $about_menuActive = '';
    $services_menuActive = '';
    $insights_menuActive = '';
    $contact_menuActive = '';
} ?>

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- Font family -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- Slick Slider CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!-- CSS -->
<link rel="stylesheet" href="css/validationEngine.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/hexagons.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/timeline.min.css">
<link rel="stylesheet" href="css/responsive.css">
</head>
<body class="<?php echo $bodyClass;?>">

<header class="inner-header">
    <div class="gradient-linear"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5">
                <div class="logo">
                    <a href="index.php"><img src="<?php echo $headerlogoUrl;?>" alt="Studio-52"></a>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-7 unset-position">
                <div class="main-head-menu">    
                    <ul class="header-menu">
                        <li class="<?php echo $home_menuActive;?>"><a href="index.php">Home</a></li>
                        <li class="<?php echo $about_menuActive;?>"><a href="about-us.php">About Us</a></li>
                        <li class="<?php echo $services_menuActive;?>"><a href="JavaScript:Void(0);">Services</a></li>
                        <li class="<?php echo $insights_menuActive;?>"><a href="JavaScript:Void(0);">Insights</a></li>
                        <li class="<?php echo $contact_menuActive;?>"><a href="contact-us.php">Contact Us</a></li>   
                    </ul>
                </div>
                <div class="scial-linkes">
                    <ul class="social-icons">
                        <li><a href="JavaScript:Void(0);"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="JavaScript:Void(0);"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="JavaScript:Void(0);"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="JavaScript:Void(0);"><i class="fa fa-twitter"></i></a></li>
                        <li class="lang"><a href="JavaScript:Void(0);"><img src="images/language.png" alt="urba-lang"></a></li>
                    </ul>
                    
                    <div class="request-quote">
                        <a href="JavaScript:Void(0);" class="hexagon-btn"> <span>Request A Quote</span></a>
                    </div>
                </div>

                <div class="switcher">
                    <svg x="0px" y="0px" width="40px" height="20px" viewBox="0 0 40 20" xml:space="preserve" preserveAspectRatio="xMidYMid meet">
                        <g>
                          <line class="st0" x1="0" y1="1" x2="40" y2="1"></line>
                          <line class="st0" x1="0" y1="10" x2="40" y2="10"></line>
                          <line class="st0" x1="0" y1="19" x2="40" y2="19"></line>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</header>