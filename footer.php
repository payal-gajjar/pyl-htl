
<section id="map">
    <div class="gradient-linear"></div>
    <img src="images/footer_map_background.png" alt="">
</section>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="foo-sec">
					<figure>
						<?php if(isset($footerlogoUrl)){?>
							<a href="index.html"><img src="<?php echo $footerlogoUrl;?>" alt="Studio-52"></a>
						<?php } else { ?>
							<a href="index.html"><img src="images/homepage/home-footer-logo.png" alt="Studio-52"></a>	
						<?php } ?>
					</figure>

					<div class="foo-sec foo-top-space">
						<h6>Stay Connected</h6>
						<ul class="foo-social">
							<li>
								<a href="JavaScript:Void(0);" class="social-hex">
									<span><i class="fa fa-facebook"></i></span>
								</a>
							</li>
							<li>
								<a href="JavaScript:Void(0);" class="social-hex">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li><a href="JavaScript:Void(0);" class="social-hex">
								<i class="fa fa-linkedin"></i></a>
							</li>
							<li><a href="JavaScript:Void(0);" class="social-hex">
								<i class="fa fa-youtube-play"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-6">
				<div class="foo-sec">
					<h6>Services</h6>
					<ul class="hover-dote first-menu">
						<li><a href="about-us.php">About Us</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="http://192.168.1.24/studio-52/blog">Blog</a></li>
						<li><a href="#">Press Release</a></li>
						<li><a href="contact-us.php">Contact Us</a></li>
					</ul>
					<ul class="hover-dote">
						<li><a href="testimonials.php">Testimonials  </a></li>
					
						<li><a href="media-library.php">Media Gallery  </a></li>
						<li><a href="technology.php">Technology</a></li>
						<li><a href="download.php">Download</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="foo-sec">
				<h6>Get In Touch</h6>
				<ul class="cont-list">
					<li><img src="images/phone-icon.png" alt=""> Call Us: <a href="tel:+97144541054"> +971-4-454-1054</a></li>
					<li><img src="images/phone-icon.png" alt=""> Toll Free: <strong></strong>  <a href="tel:+97180052">(Within UAE) 800-52</a></li>
					<li><img src="images/mail-icon.png" alt=""> Email Us: <a href="mailto:sales@studio52.tv" target="_blank"> sales@studio52.tv</a></li>
				</ul>
			</div>
			</div>
		</div>
	</div>

	<div class="copy-right">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<p>© Copyright <span id="spanYear"></span> <span class="cap-text">Studio 52</span>. All rights reserved.</p>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>

<!-- Bootstrap JS CDN -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="js/production-process-bubble.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="js/jquery.instagramFeed.min.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
<script src="js/timeline.min.js"></script>
<!-- <script src="js/jquery.mixitup.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="js/jquery-simple-lightbox.js"></script>
<script src="js/custom.js"></script>
<?php if (stripos($_SERVER['REQUEST_URI'], 'media-library.php')){ ?>
	<script src="js/media-library-pagination.js"></script>
<?php } else { ?>
	<script src="js/media-library-scroll.js"></script>
<?php } ?>
<script src="js/aos.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script> 
<script>
    AOS.init({
       disable: 'mobile',
       once: true 
    });

    // Time line slider About page
    timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems:6,
      boolean:true
    });

    // Popup On Media Library page
    $('#portfoliolist ').simpleLightbox();

    //Home main banner video mute
    var player = new Vimeo.Player(document.getElementById("vimeo_player"));
    player.on('play', function() {
        player.setVolume(0)
    });     
</script>
</html>