<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
<head>
    <meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<meta name="description" content="NfM is an award winning magazine spread across 35 countries in the world with assorted distribution channel.">

		<meta name="author" content="NfM">

		<meta name="keyword" content="fashion,magazine,NFM,NIGERIA FASHION, nigeriafashionmagazine">

		<!-- Shareable -->

		<meta property="og:title" content="NFM " />

		<meta property="og:type" content="article" />

		<meta property="og:url" content="http://nigeriafashionmagazine.netlify.app" />

		<meta property="og:image" content="" />

		

		
                 
		

		

		

		<link rel="stylesheet" href="{{ mix('scripts/toast/jquery.toast.min.css', 'assets/build')}}">

		

		<link rel="stylesheet" href="{{ mix('scripts/owlcarousel/dist/assets/owl.carousel.min.css', 'assets/build')}}>

		<link rel="stylesheet" href="{{ mix('scripts/owlcarousel/dist/assets/owl.theme.default.min.css', 'assets/build')}}>

		

		<link rel="stylesheet" href="{{ mix('scripts/magnific-popup/dist/magnific-popup.css', 'assets/build')}}">

		<link rel="stylesheet" href="{{ mix('scripts/sweetalert/dist/sweetalert.css', 'assets/build')}}">

		

		<link rel="stylesheet" href="{{ mix('scripts/bootstrap/bootstrap.min.css', "assets/build")}}">

		<link rel="stylesheet" href="{{ mix('css/style.css', 'assets/build')}}">

		<link rel="stylesheet" href="{{ mix('css/skins/all.css', 'assets/build')}}">

		<link rel="stylesheet" href="{{ mix('css/demo.css', 'assets/build')}}">
    
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>
        @yield('title')
        {{ !empty($__env->yieldContent('title')) ? ' | ' : '' }}
        {{ $page->site->title }}
    </title>

    @include('_partials.head.favicon')
    @include('_partials.head.meta')
    @include('_partials.cms.identity_widget')

    
</head>
  <body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="brand">
								<a href="index.html">
									<!-- src="{{ url('../_assets/image/FB_IMG_16658245820780083.jpg')}}" alt="Magz Logo"-->
									
                                                                         <img :src="require('@assets/imgage/FB_IMG_16658245820780083.jpg').default" alt="Logo">
        

								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-12">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something here">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><ion-icon name="search"></ion-icon></button>
										</div>
									</div>
								</div>
								<div class="help-block">
									<div>NIGERIA FASHION MAGAZINE:</div>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="register.html"><ion-icon name="person"></ion-icon><div>NEWSLETTER</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/logo.png" alt="Magz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><ion-icon name="list-outline"></ion-icon></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><ion-icon name="chevron-back-outline"></ion-icon></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>NFM</a></li>
							<li class="for-tablet"><a href="register.html">newsletter</a></li>
							<li><a href="category.html">Title</a></li>
							<li class="dropdown magz-dropdown">
								<a href="category.html">News <ion-icon name="arrow-forward-outline"></ion-icon></a>
								<ul class="dropdown-menu">
									<li><a href="index.html">Home</a></li>
									<li><a href="category.html">News</a></li>
									<li><a href="single.html">sports</a></li>
									<li><a href="page.html">fashion</a></li>
									<li><a href="search.html">celebrity corner</a></li>
		</ul>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">Top stories<ion-icon name="arrow-forward-outline"></ion-icon> <div class="badge">Hot</div></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<div class="row">
													<div class="col-md-12">
														<h2 class="megamenu-title">Trending</h2>
													</div>
												</div>
												<ul class="vertical-menu">
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Mega menu is a new feature</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> This is an example</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> For a submenu item</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> You can add</a></li>
													<li><a href="#"><i class="ion-ios-circle-outline"></i> Your own items</a></li>
												</ul>
											</div>
																		
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown magz-dropdown-megamenu"><a href="#">NFM<ion-icon name="arrow-forward-outline"></i></a>
								<div class="dropdown-menu megamenu">
									<div class="megamenu-inner">
										<div class="row">
											<div class="col-md-3">
												<h2 class="megamenu-title">Nigerian Fashion Magazine</h2>
												<ul class="vertical-menu">
													<li><a href="about">About us</a></li>
													<li><a href="#">advert spaces</a></li>
													<li><a href="#">RUNWAY</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="dropdown magz-dropdown"><a href="#">contact us<ion-icon name="arrow-forward-outline"></ion-icon></a>
								<ul class="dropdown-menu">
									<li><a href="#"><ion-icon name="person"></ion-icon> facebook</a></li>
									<li><a href="#"><ion-icon name="heart"></ion-icon> Instagram</a></li>
									<li><a href="#"><ion-icon name="chatbox"></ion-icon> Twitter</a></li>
		</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
        </header>

        <article>
            <section>
                @yield('content')
            </section>
        </article>

        
<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="images/logo-light.png" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									pt>
NFM is an award winning magazine spread across 35 countries worldwide
	

	
	
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">fashion</a></li>
									<li><a href="#">sports</a></li>
									<li><a href="#">celebrity</a></li>
									<li><a href="#">lifestyle</a></li>
									<li><a href="#">Runway</a></li>
									
									
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Newsletter</h1>
							<div class="block-body">
								<p>By subscribing you will receive new articles in your email.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<ion-icon name="email-outline"></ion-icon>
										</div>
										<input type="email" class="form-control email" placeholder="Your mail">
									</div>
									<button class="btn btn-primary btn-block white">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
					
					<div class="col-md-3 col-sm-6 col-xs-12">
						
								
								
							
						
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<ion-icon name="logo-facebook"></ion-icon>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<ion-icon name="logo-twitter"></ion-icon>
										</a>
									</li>
									
										
											
											
										
									
									
										
											
											
										
									
									
										
											
										
									
									
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; NFM 2022. ALL RIGHT RESERVED.
							<div>
								Made with <ion-icon name="heart"></ion-icon> by <a href="http://.com">NFM</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
            

    </section>
<script src="{{ mix('js/main.js','assets/build')}}"></script>
		<script src="{{ mix('js/jquery.migrate.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/bootstrap/bootstrap.min.js','assets/build')}}"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="{{ mix('scripts/jquery-number/jquery.number.min.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/owlcarousel/dist/owl.carousel.min.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/magnific-popup/dist/magnific-popup.min.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/easescroll/jquery.easeScroll.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/sweetalert/dist/sweetalert.min.js','assets/build')}}"></script>
		<script src="{{ mix('scripts/toast/jquery.toast.min.js','assets/build')}}"></script>
		<script src="{{ mix('js/demo.js','assets/build')}}"></script>
		<script src="{{ mix('js/e-magz.js','assets/build')}}"></script>
    
    @includeWhen($page->production && $page->services->analytics, '_partials.analytics')
    @include('_partials.cms.identity_redirect')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
