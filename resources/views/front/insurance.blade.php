<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Insurance | Insurances type</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/front/fonts/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
		<link href="{{ URL::asset('public/front/fonts/lineo-icon/style.css') }}" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="{{ URL::asset('public/front/css/style.css') }}">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

		<div id="site-content">
			<header class="site-header">
				<div class="top-header">
					<div class="container">
						<a href="index.html" id="branding">
							<img src="{{ URL::asset('public/front/images/logo.png') }}" alt="Company Name" class="logo">
							<div class="logo-text">
								<h1 class="site-title">Company Name</h1>
								<small class="description">Taline goes here</small>
							</div>
						</a> <!-- #branding -->

						<div class="right-section pull-right">
							<a href="#" class="phone"><img src="{{ URL::asset('public/front/images/icon-phone.png') }}" class="icon">+1 823 424 9134</a>

							<form action="#" class="search-form">
								<input type="text" placeholder="Search...">
								<button type="submit"><img src="{{ URL::asset('public/front/images/icon-search.png') }}" alt=""></button>
							</form>
						</div>
					</div> <!-- .container -->
				</div> <!-- .top-header -->


				<div class="bottom-header">
					<div class="container">
						<div class="main-navigation">
							<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
							<ul class="menu">
								<li class="menu-item"><a href="about.html">About us</a></li>
								<li class="menu-item current-menu-item"><a href="insurance.html">Insurance plans</a></li>
								<li class="menu-item"><a href="resource.html">Resources</a></li>
								<li class="menu-item"><a href="contact.html">Contact</a></li>
							</ul> <!-- .menu -->
						</div> <!-- .main-navigation -->

						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>

						<div class="mobile-navigation"></div>
					</div>
				</div>

			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="breadcrumbs">
					<div class="container">
						<a href="index.html">Home</a>
						<span>Insurance</span>
					</div>
				</div>

				<div class="page">
					<div class="container">
						<h3 class="entry-title">Choose your own insurance plan</h3>
						<p>Nam posuere purus vitae est sollicitudin placerat. Praesent posuere porta dignissim. Phasellus viverra, urna a convallis tincidunt, ante mi tempor turpis, nec tempor mauris ligula ut sapien. Etiam euismod mi eu ante mollis commodo. Suspendisse porta nisi vitae dui hendrerit, eget ornare orci semper. Phasellus pharetra, erat sit amet rutrum porttitor, est eros consectetur elit, molestie consequat erat tellus in dui. Vestibulum a vehicula sem. Nullam commodo quis purus in volutpat. Integer semper lacus a lorem efficitur auctor curabitur tincidunt ligula non.</p>

						<div class="filter-links filterable-nav">
							<select class="mobile-filter">
								<option value="*">Show all</option>
								<option value=".skyscraper">skyscraper</option>
								<option value=".shopping-center">shopping-center</option>
								<option value=".apartment">apartment</option>
							</select>
							<strong>Select Category: </strong>
							<a href="#" class="current wow fadeInRight" data-filter="*">Show all</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".2s" data-filter=".skyscraper">skyscraper</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".4s" data-filter=".shopping-center">shopping-center</a>
							<a href="#" class="wow fadeInRight" data-wow-delay=".6s" data-filter=".apartment">apartment</a>
						</div>

						<div class="filterable-items">
							<div class="insurance-item filterable-item shopping-center">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-sofa"></i></div>
									<h3 class="insurance-title">Safe Hourse</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>


							<div class="insurance-item filterable-item skyscraper">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-pool"></i></div>
									<h3 class="insurance-title">Happy Holiday</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item apartment">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-nurse"></i></div>
									<h3 class="insurance-title">Medical 24</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item shopping-center">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-weigher"></i></div>
									<h3 class="insurance-title">Financial Balance</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item apartment">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-car"></i></div>
									<h3 class="insurance-title">Car Protect</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>

							<div class="insurance-item filterable-item skyscraper">
								<div class="insurance-content">
									<div class="insurance-icon"><i class="icon-shirt"></i></div>
									<h3 class="insurance-title">Bussiness Insurance</h3>
									<p>Etiam aliquam ante in mattis molestie. Vivamus in laoreet eros. Proin tempus velit dui lobortis justo laoreet nes phasellus luctus neque.</p>
									<a href="#" class="button">See details</a>
								</div>
							</div>
						</div>

						<div class="pagination">
							<span class="current">1</span>
							<a href="#">2</a>
							<a href="#">3</a>
						</div>
					</div>
				</div> <!-- .page -->
			</main>

			<div class="site-footer">
				<div class="widget-area">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Contact</h3>
									<address> Company Name INC. 523 Burt Street, Omaha
									</address>
									<a href="#">Phone: +1 823 424 9134</a>
									<a href="mailto:info@company.com">info@company.com</a>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Company</h3>
									<ul class="no-bullet">
										<li><a href="#">About us</a></li>
										<li><a href="#">Infoline</a></li>
										<li><a href="#">Team</a></li>
										<li><a href="#">Join us</a></li>
										<li><a href="#">Cooperation</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Products</h3>
									<ul class="no-bullet">
										<li><a href="#">Life insurance</a></li>
										<li><a href="#">Home insurance</a></li>
										<li><a href="#">Car insurance</a></li>
										<li><a href="#">Business insurance</a></li>
										<li><a href="#">Investment insurance</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Our Solutions</h3>
									<ul class="no-bullet">
										<li><a href="#">Presentation</a></li>
										<li><a href="#">Testimonials</a></li>
										<li><a href="#">Examples</a></li>
										<li><a href="#">Our experts</a></li>
										<li><a href="#">Resources</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Press Room</h3>
									<ul class="no-bullet">
									<li><a href="#">Advertisement</a></li>
									<li><a href="#">Interviews</a></li>
									<li><a href="#">Hot news</a></li>
									<li><a href="#">Photos</a></li>
									<li><a href="#">Marketing</a></li>
									</ul>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-2">
								<div class="widget">
									<h3 class="widget-title">Resources</h3>
									<ul class="no-bullet">
										<li><a href="#">Sed imperdiet magna</a></li>
										<li><a href="#">Pellentesque molestie</a></li>
										<li><a href="#">Nulla luctus cursus</a></li>
										<li><a href="#">Ligula vel lacinia</a></li>
										<li><a href="#">Mauris scelerisque</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bottom-footer">
					<div class="container">
						<nav class="footer-navigation">
							<a href="#">Home</a>
							<a href="#">About us</a>
							<a href="#">Insurance plans</a>
							<a href="#">Resources</a>
							<a href="#">Contact</a>
						</nav>

						<div class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved.</div>
					</div>
				</div>
			</div>
		</div>

		<script src="{{ URL::asset('public/front/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ URL::asset('public/front/js/plugins.js') }}"></script>
		<script src="{{ URL::asset('public/front/js/app.js') }}"></script>

	</body>

</html>
