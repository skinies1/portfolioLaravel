<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Home</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link  href="../css/style.css" rel="stylesheet">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="header-collapse">
		
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
							<li class="menu-item current-menu-item"><a href="{{ url('/') }}">Home</a></li>
							<li class="menu-item"><a href="{{ url('/about') }}">About</a></li>
							<li class="menu-item"><a href="{{ url('/gallery') }}">Gallery</a></li>
							<!-- <li class="menu-item"><a href="download.html">Download</a></li> -->
							<!-- <li class="menu-item"><a href="blog.html">Blog</a></li> -->
							<li class="menu-item"><a href="{{ url('/contact') }}">Contact</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
    
            <div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg">
							<div class="container">
                                <h1>|| ꧁෴ ਬੇ - ਓ ෴꧂ ||</h1>
                                <img src="../pic1.jpg" alt="por logo" style=" border-radius:25%; border-style: solid; border-color: #333; border-width: 5px;" width="230px !important" height="300px !important" />
                                <h1>╚❈•≫─≪•◦ ❈ ◦•≫─≪•❈╝</h1>
                                <h1>Suttipong Sirirak</h1>
                                <h4>One day... I'm gonna make the onions CRY</h4>


							</div>
						</li>
					</ul>   
				</div>
			</div>

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