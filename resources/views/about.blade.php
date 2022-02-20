<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>About Us</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="../css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="{{ url('/') }}" id="branding">
                        <img src="../dummy/logo.jpg" alt="Site Title" width="50px !important" height="50px !important">
						<small class="site-description">MY-PRO</small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
                            <li class="menu-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="menu-item current-menu-item"><a href="{{ url('/about') }}">About</a></li>
							<li class="menu-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
							<!-- <li class="menu-item"><a href="download.html">Download</a></li> -->
							<!-- <li class="menu-item"><a href="blog.html">Blog</a></li> -->
							<li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">♥ About Me ♥</h2>
									<figure class="featured-image">
										<img src="dummy/about-1.jpg" alt="post image">
									</figure>
                                    <h2>Name : Suttipong Sirirak</h2>
                                    <h2>Nickname : Por</h2>
                                    <h2>Date of Birth : Friday 27 October 2000</h2>
                                    <h2>Age : 21 years old</h2>
                                    <h2>Nationality : Thai </h2>
                                    <h2>Mobile Number : 095-679-8957</h2>
                                    <h2>Email : por.papika@gmail.com</h2>
                                    <h2>Gifted #4 Rayongwittayakom School</h2>
                                    <h2>Wit-com #11 Rayongwittayakom School</h2>
                                    <h2>Software Engineer</h2>
                                    <h2>Thammasart University #85</h2>
								</div>
							</div>
							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
										<h3 class="widget-title">Timeline</h3>
										<ul class="discography-list">
											<li>
												<figure class="cover"><img src="dummy/timeline1.jpg" alt="thumbnail 1"></figure>
												<div class="detail">
													<h3><a href="#">Gifted Rayongwittayakom</a></h3>
													<span class="year">2013-2015</span>
													<span class="track">3 years</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/timeline2.jpg" alt="thumbnail 2"></figure>
												<div class="detail">
													<h3><a href="#">Witcom Rayongwittayakom</a></h3>
													<span class="year">2015-2018</span>
													<span class="track">3 years</span>
												</div>
											</li>
											<li>
												<figure class="cover"><img src="dummy/pic3.jpg" alt="thumbnail 3"></figure>
												<div class="detail">
													<h3><a href="#">Thamasart University</a></h3>
													<span class="year">2019 - Now</span>
													<span class="track">3 years</span>
												</div>
											</li>
		
										</ul>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<address>
						<p>Software Enginearing Thamasart University <br><a href="tel:9488487853">095-6798957</a> <br> <a href="mailto:srikrishnacommunication55@gmail.com">por.papika@gmail.com</a></p> 
					</address> 
			    </div>
			</footer> <!-- .site-footer -->
		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>