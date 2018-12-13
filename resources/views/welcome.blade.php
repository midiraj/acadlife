<!DOCTYPE html>
<html lang="en">
<head>
	<title>Embryo</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">-->
	<!-- STYLES -->
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/flexslider.css">
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/animsition.min.css">
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/style.css">
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/owl.carousel.css">
	<link rel="stylesheet" href="{{asset('/files/')}}/welcome_assets/css/owl.theme.css">

</head>

<body class="animition">
	<!-- Border -->
	<span class="frame-line top-frame visible-lg"></span>
	<span class="frame-line right-frame visible-lg"></span>
	<span class="frame-line bottom-frame visible-lg"></span>
	<span class="frame-line left-frame visible-lg"></span>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container-fluid">
				<!-- box header -->
				<div class="box-header">
						<!-- box-nav -->
						<a class="box-primary-nav-trigger" href="#0">
								<span class="box-menu-icon"></span>
						</a>
						<!-- box-primary-nav-trigger -->
				</div>
				<!-- end box header -->

				<!-- nav -->
				<nav>
						<ul class="box-primary-nav">
								<li class="box-label">AcadLife</li>

								<li><a href="{{url('/')}}">Welcome</a> <i class="lnr lnr-home"></i></li>
								<li><a href="{{url('/login')}}">Login</a></li>
								<li><a href="{{url('/register')}}">Sign Up</a></li>
								<li><a href="contact.html">contact</a></li>

								<li class="box-label">SOCIAL</li>

								<li class="box-social"><a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="box-social"><a href="#0"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
				</nav>
				<!-- end nav -->

				<!-- box-intro -->
				<section class="box-intro bg-film">
						<div class="table-cell">

								<h3 class="box-headline letters rotate-2">
										<span class="box-words-wrapper">
												<!--<b class="is-visible">CLEAN &nbsp;&amp;&nbsp; CREATIVE.</b>-->
												<b>&nbsp;SIMPLE &nbsp;&amp;&nbsp; ELEGENT.</b>
										</span>
								</h3>
								<h1>THIS IS AcadLife</h1>

						</div>

						<div class="mouse">
								<div class="scroll"></div>
						</div>
				</section>
				<!-- end box-intro -->
		</div>
	</header>

	<!-- HISTORY OF AGENCY -->
	<section id="about" class="about mt-150 mb-50">
		<div class="container">
			<div class="row center">
				<div class="col-md-8 col-md-offset-2">
					<img src="{{asset('/files/')}}/welcome_assets/img/about.png" alt="Khaki HTML Template" width="300">
					<div class="km-space"></div>
					<h5 class="lead">This is the platform where teachers and students met virtually.</h5>
				</div>
			</div><!-- description text -->
		</div>
	</section>

	
	<!-- Contact -->
	<section id="contact" class="contact mbr-box mbr-section mbr-section--relative mbr-section--bg-adapted">
		<div class="container">
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<h4> Let's work together</h4>
						<p class="libre-text mt-50">
							This is AcadLife
						</p>
				</div>
			</div>

                <!-- Start Copyright -->
                <div class="copyright-section">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; {{ date('Y') }} AcadLife</a> </p>
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div>
                <!-- End Copyright -->
            </div>
	</footer>

	<!-- SCRIPTS -->
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/animated-headline.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/menu.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/modernizr.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/init.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/main.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/smooth-scroll.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/numscroller.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/wow.min.js"></script>
	<script type="text/javascript" src="{{asset('/files/')}}/welcome_assets/js/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			new WOW().init();

			// initialise flexslider
			$('.flexslider').flexslider({
				animation: "fade",
				directionNav: true,
				controlNav: false,
				keyboardNav: true,
				slideToStart: 0,
				animationLoop: true,
				pauseOnHover: false,
				slideshowSpeed: 4000,
			});

			smoothScroll.init();

			// initialize isotope
			var $container = $('.portfolio_container');
			$container.isotope({
				filter: '*',
			});

			$('.portfolio_filter a').click(function(){
				$('.portfolio_filter .active').removeClass('active');
				$(this).addClass('active');

				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 500,
						animationEngine : "jquery"
					}
				});
				return false;
			});
		});
	</script>
</body>
</html>
