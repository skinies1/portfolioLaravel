<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Our Gallery</title>
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
							<li class="menu-item"><a href="{{ url('/about') }}">About</a></li>
							<li class="menu-item current-menu-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
							<!-- <li class="menu-item"><a href="download.html">Download</a></li> -->
							<!-- <li class="menu-item"><a href="blog.html">Blog</a></li> -->
							<li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Gallery</h2>
							
							<div class="filterable-items">
								<div class="filterable-item concert">
									<a href=""><figure><img src="dummy/gallerypic/pic1.jpg" alt="gallery 1"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href=""><figure><img src="dummy/gallerypic/pic2.jpg" alt="gallery 2"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href=""><figure><img src="dummy/gallerypic/pic3.jpg" alt="gallery 3"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href=""><figure><img src="dummy/gallerypic/pic4.jpg" alt="gallery 4"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href=""><figure><img src="dummy/gallerypic/pic5.jpg" alt="gallery 5"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href=""><figure><img src="dummy/gallerypic/pic6.jpg" alt="gallery 6"></figure></a>
								</div>
								<div class="filterable-item concert">
									<a href=""><figure><img src="dummy/gallerypic/pic7.jpg" alt="gallery 7"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href=""><figure><img src="dummy/gallerypic/pic8.jpg" alt="gallery 8"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href=""><figure><img src="dummy/gallerypic/pic9.jpg" alt="gallery 9"></figure></a>
								</div>
								<div class="filterable-item stuff">
									<a href=""><figure><img src="dummy/gallerypic/pic10.jpg" alt="gallery 10"></figure></a>
								</div>
								<div class="filterable-item band">
									<a href=""><figure><img src="dummy/gallerypic/pic12.png" alt="gallery 11"   ></figure></a>
								</div>
								
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