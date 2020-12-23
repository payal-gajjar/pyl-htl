<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
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

<body class="home">
<section id="home-video-player">
    <iframe id="vimeo_player" src="https://player.vimeo.com/video/360723749?autoplay=1&loop=1&autopause=0&player_id=vimeo_player" width="100%" frameborder="0" allow="autoplay; fullscreen" webkitallowfullscreen allowfullscreen mozallowfullscreen muted></iframe>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center video-content">
                <small data-aos="fade-down"  data-aos-duration="1000"> We're Built to Tell Stories </small>
                <h1 class="video-title" data-aos="fade-down"  data-aos-duration="1500">Innovative Solutions <br> for Your <br> Communication <br> Needs
                </h1>
 
                <a class="scroll-down-arrow-home">
                    <img src="images/ScrollArrowAnimate.gif" alt=""> 
                </a>
            </div>
        </div>
    </div>
    <header>
  <div class="gradient-linear"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5">
                <div class="logo">
                    <a href="index.php"><img src="images/home-header-logo-white.png" alt="logo"></a>
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
                        <li class="lang"><a href="JavaScript:Void(0);"><img src="images/urba-lang.png" alt="urba-lang"></a></li>

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
</section>



<section id="our-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2 data-aos="fade-right"  data-aos-duration="1000">OUR SERVICES</h2>
                <p data-aos="fade-left"  data-aos-duration="2000">Innovative solutions for your communication needs</p>
            </div>

            <ul id="hexGrid">
              <li class="hex video" data-aos="fade-down"  data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="video-service.php">
                    <h4><img src="images/homepage/services/video.png"></h4>
                    <strong>Video</strong>
                  </a>
                </div>
              </li>
              <li class="hex audio" data-aos="fade-down"  data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="audio.php">
                  
                     <h4><img src="images/homepage/services/audio.png"></h4>
                    <strong>Audio</strong>
                  </a>
                </div>
              </li>
              <li class="hex safety" data-aos="fade-down"  data-aos-duration="1000"> 
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn"s>
                  <a class="hexLink" href="safety.php">
                     <h4><img src="images/homepage/services/safty.png"></h4>
                    <strong>Safety</strong>
                  </a>
                </div>
              </li>
              <li class="hex timelapse" data-aos="fade-down"  data-aos-duration="1000"> 
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="timelapse.php">
                    <h4><img src="images/homepage/services/timelapse.png"></h4>
                    <strong>Timelapse</strong>
                  </a>
                </div>
              </li>
              <li class="hex animation" data-aos="fade-down"  data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn" >
                  <a class="hexLink" href="3d-animation.php">
                     <h4><img src="images/homepage/services/3D.png"></h4>
                    <strong>3D Animation</strong>
                  </a>
                </div>
              </li>
              <li class="hex event" data-aos="fade-down"  data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn" >
                  <a class="hexLink" href="event.php">
                    <h4><img src="images/homepage/services/event.png"></h4>
                    <strong>Event</strong>
                  </a>
                </div>
              </li>
              <li class="hex photography" data-aos="fade-up" data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="photography.php">
                     <h4><img src="images/homepage/services/photography.png"></h4>
                    <strong>Photography</strong>
                  </a>
                </div>
              </li>
              <li class="hex technology" data-aos="fade-up" data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="technology.php">
                     <h4><img src="images/homepage/services/vr.png"></h4>
                    <strong>Technology</strong>
                  </a>
                </div>
              </li>
              <li class="hex film" data-aos="fade-up" data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="film-permit.php">
                     <h4><img src="images/homepage/services/film_certificate.png"></h4>
                    <strong>Film Permits</strong>
                  </a>
                </div>
              </li>
              <li class="hex digital" data-aos="fade-up" data-aos-duration="1000"> 
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="digital.php">
                     <h4><img src="images/homepage/services/digital.png"></h4>
                    <strong>Digital </strong>
                  </a>
                </div>
              </li>
              <li class="hex drone" data-aos="fade-up" data-aos-duration="1000">
                <svg> 
                    <polygon points="87,0 174,50 174,150 87,200 0,150 0,50 87,0"
                    ></polygon>
                </svg>
                <div class="hexIn">
                  <a class="hexLink" href="drone.php">
                     <h4><img src="images/homepage/services/drone.png"></h4>
                    <strong>Drone</strong>
                  </a>
                </div>
              </li>
            </ul>
        </div>
    </div>
</section>

<section id="who-we-are-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content" data-aos="fade-right"  data-aos-duration="1000">
                <h2>WHO WE ARE</h2>
            </div>
        </div>

        <div class="row align-items-center left-animate-border">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-duration="2000">
                <div class="about-studio">
                    <h3>About Studio 52</h3>
                    <p>Studio 52 has been helping businesses reach their true potential for over 40 years. Our media production services work to seamlessly transmit the company culture of our clients. It's no wonder we're the number one choice for clients in the UAE, Qatar, Saudia Arabia, and all over the middle east.  </p>
                    <p>It’s no accident that Studio 52 has remained in business for over 40 years. The world’s savviest executives in both government and corporate have consistently picked Studio 52 to do all of their video and audio work for years, and in some cases decades.</p>

                    <div class="find-more">
                        <a href="about-us.php" class="hexagon-btn"> <span>Find Out More</span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12"> 
                <figure class="video-sec">
                    <img src="images/homepage/who-we-are-section.jpg" alt="" data-aos="fade-left" data-aos-duration="2500">
                    <figcaption>
                        <div class="play-btn" data-aos="fade-left" data-aos-duration="2500">
                            <div class="btn circle pulse" data-toggle="modal" data-target="#who-we-Modal">
                                <span class="ripple-wave-btn">
                                    <img src="images/homepage/play-btn.png" alt="">
                                </span>
                            </div>
                        </div>

                        <!-- Popup-Video-Content -->
                        <div id="who-we-Modal" class="modal fade who-we-Modal" role="dialog">
                          <div class="modal-dialog">
                            <div class="modal-content">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <div class="modal-body who-we-model-box">
                                <iframe src="https://player.vimeo.com/video/360723749" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                              </div>
                            </div>
                          </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="how-we-do-it-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2 data-aos="fade-right"  data-aos-duration="1000">HOW WE DO IT</h2>
                <h3 data-aos="fade-left"  data-aos-duration="1200">An End-To-End Solution</h3>
                <p data-aos="fade-up" data-aos-duration="1500">Here’s how we’ll transform your visual media</p>
            </div>
        </div>
        <div class="process-chart">     
            <div class="process-step pro-step-one">
                <div class="pro-border-one pro-purple-line"></div>
                <figure>
                    <span>
                        <img src="images/homepage/process/consultancy.png" alt="">
                    </span>
                    <figcaption class="tooltip-purple-box tooltip--box">
                        Consult  <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-bottom">
                            <p>Our team gets a face-to-face understanding of your communication goals</p>
                        </div>  
                    </figcaption>
                </figure>
            </div>

            <div class="process-step pro-step-two">
                <div class="pro-border-two pro-blue-line"></div>
                <figure>
                    <figcaption class="desktop-title tooltip--box tooltip-blue-box">
                        Research <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-top">
                            <p>We dive into any source material or online info to learn more about the project</p>
                        </div>  
                    </figcaption>
                    <span>
                        <img src="images/homepage/process/research.png" alt="">
                    </span>
                    <figcaption class="mobile-title tooltip--box tooltip-blue-box">
                        Research <i class="fa fa-info-circle"></i>
                    </figcaption>
                </figure>
            </div>

            <div class="process-step pro-step-three" >
                <div class="pro-border-one pro-yellow-line"></div>
                <figure>
                    <span>
                        <img src="images/homepage/process/objectives.png" alt="">
                    </span>
                    <figcaption class="tooltip-yellow-box tooltip--box">
                        Set Objectives <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-bottom">
                            <p>Clear goals are established for the outcome of the project</p>
                        </div>  
                    </figcaption>
                </figure>
            </div>

            <div class="process-step pro-step-four">
                <div class="pro-border-two pro-orange-line"></div>
                <figure>
                    <figcaption class="desktop-title tooltip-orange-box">
                        Develop Concept <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-top  tooltip--box ">
                            <p>We spin ideas into a viable concept that best suits your needs</p>
                        </div>  
                    </figcaption>
                    <span>
                        <img src="images/homepage/process/develop.png" alt="">
                    </span>
                    <figcaption class="mobile-title tooltip-orange-box">
                       Develop Concept <i class="fa fa-info-circle"></i>
                    </figcaption>
                </figure>
            </div>

            <div class="process-step pro-step-five">
                <div class="pro-border-one pro-lightblue-line"></div>
                <figure>
                    <span>
                        <img src="images/homepage/process/script.png" alt="">
                    </span>
                    <figcaption class="tooltip-lightblue-box tooltip--box">
                        Script & Storyboard <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-bottom">
                            <p>Our team begin putting the concept down on paper – first in words – then in visuals</p>
                        </div>  
                    </figcaption>
                </figure>
            </div>

            <div class="process-step pro-step-six">
                <div class="pro-border-two pro-green-line"></div>
                <figure>
                    <figcaption class="desktop-title tooltip-green-box tooltip--box">
                        Film/Animate & Edit <i class="fa fa-info-circle"></i>

                         <div class="tool-tip-box tip-top  tooltip--box ">
                            <p>We produce the content either with a film crew or animation team, then package it all together</p>
                        </div>  
                    </figcaption>
                    <span>
                        <img src="images/homepage/process/film_edit.png" alt="">
                    </span>
                    <figcaption class="mobile-title tooltip-green-box tooltip--box">
                        Film/Animate & Edit <i class="fa fa-info-circle"></i>
                    </figcaption>
                </figure>
                
            </div>

            <div class="process-step pro-step-seven">
                <div class="pro-border-one pro-drkgreen-line"></div>
                <figure>
                    <span>
                        <img src="images/homepage/process/deliver.png" alt="">
                    </span>
                    <figcaption class="tooltip-drkgreen-box tooltip--box">
                        Deliver <i class="fa fa-info-circle"></i>

                        <div class="tool-tip-box tip-bottom">
                            <p>One more happy client</p>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
    <canvas id="canvas1"></canvas>  
</section>

<section>
  <div class="container">
    <div class="row request-quote-sec">
        <div class="col-lg-9 col-md-8 col-sm-12" data-aos="fade-right" data-aos-duration="2500">
            <h5>Like our working process for your video production</h5>
            <p>Give us a call: <a href="tel:+97144541054"> +971-4-454-1054</a>  or 
             <a href="tel:+97180052"> TOLL FREE (Within UAE) –  800-52</a></p>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-12" data-aos="fade-left" data-aos-duration="2500">
            <div class="pull-right">
                <a href="JavaScript:Void(0);" class="hexagon-btn"> <span>Get A Quote</span></a>
            </div>
        </div>
    </div>
  </div>
</section>

<section id="our-work-sec" class="right-left-border">
    <div class="container over-index">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2 data-aos="fade-right"  data-aos-duration="1000">OUR WORK</h2>
                <p data-aos="fade-left"  data-aos-duration="1000">We use the best visuals, audio and words to create an impactful <br> message for your audience</p>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="tabing-links" data-aos="fade-up" data-aos-duration="2000">
                   <li><a class="hexagon-btn active" href="video-service.php"><span>Video</span></a></li>
                   <li><a class="hexagon-btn" href="audio.php"><span>Audio</span></a></li>
                   <li><a class="hexagon-btn" href="safety.php"><span>Safety</span></a></li>
                   <li><a class="hexagon-btn" href="timelapse.php"><span>Timelapse</span></a></li>
                   <li><a class="hexagon-btn" href="3d-animation.php"><span>3D Animation</span></a></li>
                   <li><a class="hexagon-btn" href="event.php"><span>Event</span></a></li>
                   <li><a class="hexagon-btn" href="photography.php"><span>Photography</span></a></li>
                   <li><a class="hexagon-btn" href="technology.php"><span>Technology</span></a></li>
                   <li><a class="hexagon-btn" href="flim-permit.php"><span>Film Permit</span></a></li>
                   <li><a class="hexagon-btn" href="digital.php"><span>Digital</span></a></li>
                   <li><a class="hexagon-btn" href="drone.php"><span>Drone</span></a></li>
                </ul>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 left-videos" data-aos="fade-right" data-aos-duration="2000">
                <div class="tabing-video full-img">
                    <figure>
                        <img src="images/homepage/video-section/Motion-Graphics.jpg" alt="">
                        <figcaption>  
                          <div class="v-title">
                              <h5>Corporate / Video</h5>
                         
                              <div class="tabing-video-dule-btn">
                                <div class="play-btn">
                                    <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal1"><span> <i class="fa fa-caret-right"></i> Watch showreel </span></a>
                                </div> 

                                <div class="play-btn">
                                    <a class="hexagon-btn" href="video-service.php">
                                    <span> Know more </span></a>
                                </div>
                              </div> 
                          </div>  
                        </figcaption>
                    </figure>
                </div> 
                <div class="tabing-video small-img">
                    <figure>
                        <img src="images/homepage/video-section/event-thumbnail.jpg" alt="">
                          <div class="tabing-video-dule-btn for-small-btn">
                            <div class="play-btn-in right">
                                <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal2"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                            </div> 

                            <div class="play-btn-in left">
                                <a class="hexagon-btn" href="event.php"><span>  Know more  </span></a>
                            </div>
                          </div> 
                        <figcaption>    
                               <h6> Event</h6>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="images/homepage/video-section/timelapse-thumbnail.jpg" alt="">
                          <div class="tabing-video-dule-btn for-small-btn">
                            <div class="play-btn-in right">
                                <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal11"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                            </div> 

                            <div class="play-btn-in left">
                                <a class="hexagon-btn" href="timelapse.php"><span>  Know more  </span></a>
                            </div>
                          </div>
                        <figcaption>    
                            <h6>
                                TimeLapse 
                           </h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="tabing-video small-img">
                    <figure>
                        <img src="images/homepage/video-section/safety.jpg" alt="">
                          <div class="tabing-video-dule-btn for-small-btn">
                            <div class="play-btn-in right">
                                <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal3"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                            </div> 

                            <div class="play-btn-in left">
                                <a class="hexagon-btn" href="safety.php"><span>  Know more  </span></a>
                            </div>
                          </div>
                        <figcaption>    
                            <h6>
                                Safety 
                            </h6>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="images/homepage/video-section/drone.jpg" alt="">
                          <div class="tabing-video-dule-btn for-small-btn">
                            <div class="play-btn-in right">
                                <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal5"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                            </div> 

                            <div class="play-btn-in left">
                                <a class="hexagon-btn" href="drone.php"><span>  Know more  </span></a>
                            </div>
                          </div>
                        <figcaption>    
                           <h6>
                               Drone 
                            </h6>
                        </figcaption>
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 right-videos" data-aos="fade-left" data-aos-duration="2000">
                <div class="tabing-video small-img">
                    <figure>
                        <img src="images/homepage/video-section/photography-thmbnal.jpg" alt="">
                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal4"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="photography.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                            <h6>
                                Photography 
                            </h6>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="images/homepage/video-section/Audio-thumbnail.jpg" alt="">
                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal6"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="audio.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                            <h6>
                                Audio 
                            </h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="tabing-video small-img">
                    <figure>
                        <img src="images/homepage/video-section/animation-thumbnail.jpg" alt="">
                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal7"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="3d-animation.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                            <h6>
                                Animation / 3D Animation
                            </h6>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="images/homepage/video-section/sharpeagle.jpg" alt="">

                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal8"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="technology.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                            <h6>
                               Technology 
                            </h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="tabing-video long-img">
                    <figure>
                        <img src="images/homepage/video-section/film-permit.jpg" alt="">

                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal9"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="film-permit.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                            <h6>
                               Film Permit
                            </h6>
                        </figcaption>
                    </figure>
                </div>
                <div class="tabing-video long-img">
                    <figure>
                        <img src="images/homepage/video-section/digital.jpg" alt="">

                        <div class="tabing-video-dule-btn for-small-btn">
                          <div class="play-btn-in right">
                              <a class="hexagon-btn" data-toggle="modal" data-target="#who-we-Modal10"><span><i class="fa fa-caret-right"></i> &nbsp; Watch showreel </span></a>
                          </div> 

                          <div class="play-btn-in left">
                              <a class="hexagon-btn" href="digital.php"><span>  Know more  </span></a>
                          </div>
                        </div>
                        <figcaption>    
                           <h6>
                                Digital 
                            </h6>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="row long-btn">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="pull-right">
                    <a href="media-library.php" class="hexagon-btn white-btn"> <span>View All Media Library</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="pull-left">
                    <a href="video-service.php" class="hexagon-btn white-btn"> <span>Make My Video</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup-Video-Content who-we-Modal1 -->
    <div id="who-we-Modal1" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/360723488" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal2-->
    <div id="who-we-Modal2" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/360723646" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal3 -->
    <div id="who-we-Modal3" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/360723580" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content  who-we-Modal4-->
    <div id="who-we-Modal4" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/390704964" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal5-->
    <div id="who-we-Modal5" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/347265854" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal6-->
    <div id="who-we-Modal6" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/255350265" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal7-->
    <div id="who-we-Modal7" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/360723376" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal8-->
    <div id="who-we-Modal8" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/390731792" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal9-->
    <div id="who-we-Modal9" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/390443987" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal10-->
    <div id="who-we-Modal10" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/390702885" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
    <!-- Popup-Video-Content who-we-Modal11-->
    <div id="who-we-Modal11" class="modal fade who-we-Modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal">×</button>
          <div class="modal-body who-we-model-box">
            <iframe src="https://player.vimeo.com/video/360723932" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </div>
</section>

<section id="client-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2 data-aos="fade-right"  data-aos-duration="1000">CLIENT TESTIMONIALS</h2>
                <h3 data-aos="fade-left"  data-aos-duration="1000">Don’t Take Our Word For It</h3>
                <p data-aos="fade-up" data-aos-duration="1500"> Let's see what our  clients have to say about our work</p>
            </div>

            <div class="col-lg-6 col-md-7 col-sm-12 slider-top-space" data-aos="fade-right"  data-aos-duration="1000">
                <div class="slide-quote-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="testimonial">
                    
                    <div>
                        <p>Studio 52’s ability to understand my needs and produce the video I wanted made working with them so easy..</p>
                        <ul>
                            <li class="client-name">
                                <strong>Niels Espeland,</strong>
                                <small>Area Manager</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/kca_logo.png" alt="">
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p>Our company’s new IVR helps our customers get what they’re looking for. Thanks, Studio 52.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Liana Khalaf,</strong>
                                <small>Marketing Manager</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/02-logo.png" alt="">
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p>We no longer have to give drawn out safety inductions to visitors – now we have a short video that says it all.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Yadder Sherbiny,</strong>
                                <small>Director Of Sales</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/03-logo.png" alt="">
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p>Studio 52 captured our training event perfectly – they knew exactly what to get on camera and delivered in a few days.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Sherif Hanna,</strong>
                                <small>Rooms Division Manager</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/04-logo.png" alt="">
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p>Studio 52’s photographer did an excellent job of showing our latest design work off.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Paul Williams,</strong>
                                <small>Noble Drilling International</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/05-logo.png" alt="">
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p>We wanted a video that sold our company and processes – Studio 52’s animation team delivered.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Daniel Rogers,</strong>
                                <small>K2 Velosi Singapore</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/06-logo.png" alt="">
                            </li>
                        </ul>
                    </div>

                    <div>
                        <p>Getting a bird’s eye view of our construction not only helped with completing the project – we were able to use it as marketing material as well.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Juan Carlos Lopez,</strong>
                                <small>HSE Manager</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/07-logo.png" alt="">
                            </li>
                        </ul>
                    </div>
                     <div>
                        <p>Studio 52’s SEO and online marketing work lead to increased click-through and ultimately improved sales.</p>
                        <ul>
                            <li class="client-name">
                                <strong>Abdulkarim AI Mazmi,</strong>
                                <small>President & GM</small>
                            </li>
                            <li class="testimonial-logo">
                                <img src="images/homepage/testimonial/08-logo.png" alt="">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="read-all-testimonial">
                    <a href="testimonials.php" class="hexagon-btn"> <span>Read All <i class="fa fa-angle-double-right"></i></span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-12" data-aos="fade-left"  data-aos-duration="1500">
                <div class="testimonial-img">
                    <img src="images/homepage/testimonial.png" alt="">
                </div>
            </div>
        </div>

        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12" data-aos="fade-up"  data-aos-duration="1000">
                <a href="#" class="solution-link hexagon-btn">
                    <span>Want To Talk Video Solution?  <i class="fa fa-angle-double-right"></i></span></a>
            </div>
        </div>
    </div>
</section>

<section id="our-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2>OUR BLOG</h2>
                <h3>See What's Trending </h3>
                <p>Latest updates and blogs on video, audio, and imaging industry</p>
            </div>   

            <div class="col-lg-6 col-md-7 col-sm-12" >
                <figure class="full-blog">
                    <img src="images/homepage/our-blog/home-blog-img1.jpg" alt="">
                    <figcaption>
                        <h6>5 reason why your IVR system needs to be just right</h6>
                        <p>It's no wonder that so many businesses are implementing IVR systems. 73% of customers want the ability to solve product/service issues on their own. On top of that, 71% rather use the phone to solve their issues. </p>

                        <div class="read-all-post">
                            <a href="#" class="hexagon-btn"><span>Read more <i class="fa fa-angle-double-right" ></i></span></a>
                        </div>
                    </figcaption>
                </figure>
            </div>

            <div class="col-lg-6 col-md-5 col-sm-12">
                <div class="side-blog">
                    <figure>
                        <img src="images/homepage/our-blog/home-blog-img2.jpg" alt="">

                        <figcaption class="read-all-post">
                            <small>21 DEC, 2017</small>
                            <strong>4 Reasons why an outstanding corporate video is worth it</strong>

                            <div class="read-more-btn">
                                <a href="#" class="">Read more</a>
                            </div>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/homepage/our-blog/home-blog-img3.jpg" alt="">

                        <figcaption class="read-all-post">
                            <small>21 DEC, 2017</small>
                            <strong>Is the UAE construction industry missing out?</strong>

                            <div class="read-more-btn">
                                <a href="#" class="">Read more</a>
                            </div>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="images/homepage/our-blog/home-blog-img4.jpg" alt="">

                        <figcaption class="read-all-post">
                            <small>21 DEC, 2017</small>
                            <strong>4 tips for an unforgettable corporate news video</strong>

                            <div class="read-more-btn">
                                <a href="#" class="">Read more</a>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>


            
        </div>
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12" >
                <a href="http://192.168.1.30/studio-52/blog" class="solution-link hexagon-btn">
                    <span>Read All Recent Posts  <i class="fa fa-angle-double-right"></i></span></a>
            </div>
        </div>
    </div>
</section>

<section id="our-client-work">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content">
                <h2 >Our Clients</h2>
                <p >They trusted us and we delivered</p>
            </div>   
        </div>
        <div class="logo-slider">
            <div><img src="images/homepage/logos/adcb.png"></div>
            <div><img src="images/homepage/logos/etisalat.png"></div>
            <div><img src="images/homepage/logos/marritime_world.png"></div>
            <div><img src="images/homepage/logos/mobily.png"></div>
            <div><img src="images/homepage/logos/precision.png"></div>
            <div><img src="images/homepage/logos/sohar.png"></div>
            <div><img src="images/homepage/logos/zamil.png"></div>
            <div><img src="images/homepage/logos/adcb.png"></div>
            <div><img src="images/homepage/logos/etisalat.png"></div>
            <div><img src="images/homepage/logos/marritime_world.png"></div>
        </div>
</section>

<section class="instagramFeed blue-overlay">
    <div class="gradient-linear border-one"></div>
        <div id="instagram-feed4" class="instagram_feed"></div>
        <div class="instagram_feed-link">
            <a target="_blank" href="https://www.instagram.com/studio52.tv/" class="hexagon-btn"><span> <i class="fa fa-instagram"></i> @Studio52.TV </span></a>
        </div>
        <!-- <a target="_blank" href="https://www.instagram.com/studio52.tv/"><img src="images/instagram-banner/Audio.png" alt=""></a> -->
    <div class="gradient-linear border-two"></div>
</section>

<section id="contact-form-home">
    <div class="moving-text">
        <h2>Let's discuss </h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content"> 
                <h3>Your Video Marketing Strategy</h3>
                <p>We would love to know what your video plans are so that we can make them better.</p>
            </div>  
        </div>

        <!-- common inquiry form include here-->
        <?php include_once("inquiry_form.php"); ?>
    </div>

    <div class="loaction-sec">
        <div class="container">
            <div class="row addres-box-sec">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center title-content text-overlap">
                    <h2>Locations</h2>
                    <h3>Our Offices</h3>
                </div>
                
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="office-address text-center office-two">
                        <figure>
                            <img src="images/homepage/contries/saudi_arab.png" align="">
                            <figcaption>
                                <a target="_blank" href="https://www.google.com/maps/place/8309+Prince+Humud+St,+Madinat+Al+Umal,+Al+Khobar+34441%C2%A04173,+Saudi+Arabia/data=!4m2!3m1!1s0x3e49e86719c28d1b:0x310adc1584a31576?sa=X&ved=2ahUKEwier-DgqsvnAhVq8HMBHYl_BCAQ8gEwAHoECAsQAQ">
                                    <strong>Studio52 - Saudi Arabia</strong>,<br> 
                                    8309 Prince Humud Street<br> 
                                    Madinat Al Umal,<br> <b>Al Khobar</b>
                                    Corniche Road,<br> 
                                    Villa No: 3, <b>Jeddah</b><br> 
                                </a>
                                <span class="contact-no">
                                    Call Us: <a href="tel:+966551116121">+966-551116121</a><br>
                                    Email Us - <a href="mailto:sales@studio52.tv">sales@studio52.tv</a>
                                </span>
                            </figcaption>
                        </figure>
                        <div class="gradient-linear add-border-two"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="office-address text-center office-three">
                        <figure>
                            <img src="images/homepage/contries/Oman_Flag.png" align="">
                            <figcaption>
                                <a target="_blank" href="">
                                   <strong> Studio52 - Oman</strong>, <br>
                                    Maktabi 1,<br>
                                    Building # 3242<br>
                                    Office 101, 1st Floor, <br>
                                    P.O. Box # 1982 Muscat
                                </a>
                                <span class="contact-no">
                                    Call Us: <a href="tel:+96878220828">+968-78220828</a><br>
                                    Email Us - <a href="mailto:sales@studio52.tv">sales@studio52.tv</a>
                                </span>
                            </figcaption>
                        </figure>
                        <div class="gradient-linear add-border-three"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="office-address text-center office-one">
                        <figure>
                            <img src="images/homepage/contries/uae.png" align="">
                            <figcaption>
                                <a target="_blank" href="https://www.google.com/maps/place/Studio+52+Arts+Production+LLC+Branch/@25.1789738,55.2726279,15z/data=!4m5!3m4!1s0x0:0x46b7e04c50f47c10!8m2!3d25.1789738!4d55.2726279">
                                   <strong> STUDIO52 - UAE,</strong> <br>(Head Office)<br>
                                    Sobha Ivory Tower 2<br>
                                    Suite 402, 4th Floor<br>
                                    Business Bay,<br>
                                    PP.O. Box # 80752 <br> <b>Dubai, UAE</b>
                                </a>
                                <span class="contact-no">
                                    Call Us: <a href="tel:+97144541054">+97144541054</a><br>
                                    Email Us - <a href="mailto:sales@studio52.tv">sales@studio52.tv</a>
                                </span>
                            </figcaption>
                        </figure>
                        <div class="gradient-linear add-border-one"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="office-address text-center office-five">
                        <figure>
                            <img src="images/homepage/contries/Kuwait_Flag.png" align="">

                            <figcaption>
                                <a target="_blank" href="#">
                                   <strong>Studio52 Kuwait</strong>,<br>
                                   Green Tower, 4th Floor,<br>
                                   Opposite Al Hamra Mall Sharq,<br>
                                   <b> Kuwait </b>
                                </a>
                                <span class="contact-no">
                                    Call Us: <a href="tel:+96599581553">+965-99581553</a><br>
                                    Email Us - <a href="mailto:sales@studio52.tv">sales@studio52.tv</a>
                                </span>
                            </figcaption>
                        </figure>
                        <div class="gradient-linear add-border-five"></div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="office-address text-center office-four">
                        <figure>
                            <img src="images/homepage/contries/india.png" align="">

                            <figcaption>
                                <a target="_blank" href="https://www.google.com/maps/place/DSIJ+Pvt+Ltd/@18.5398674,73.8989478,15z/data=!4m2!3m1!1s0x0:0xf9f12ab64b55d087?sa=X&ved=2ahUKEwiw_-WErL_nAhXHAnIKHSq5DKIQ_BIwC3oECA4QCA">
                                    <strong>Studio 52 - India</strong> <br>
                                    Trade Centre Office No 305, Koregoan Park,
                                    <b>Pune</b>
                                </a>
                                <br>
                                <a href="https://www.google.com/maps/place/Western+Business+Park/@22.7278506,75.8848777,15z/data=!4m2!3m1!1s0x0:0xe9181f947bcccd4f?sa=X&ved=2ahUKEwiP6tjgrL_nAhVKcCsKHdDMDtcQ_BIwC3oECBwQBg"  target="_blank">
                                  107, Western Business Center New Palasia,
                                   <b>Indore</b>
                                </a>
                                <span class="contact-no">
                                    Call Us: <a href="tel:+917058819210">+91-7058819210</a><br>
                                    Email Us - <a href="mailto:sales@studio52.tv">sales@studio52.tv</a>
                                </span>
                            </figcaption>
                        </figure>
                        <div class="gradient-linear add-border-four"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php"); ?>
