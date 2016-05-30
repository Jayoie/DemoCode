
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Jay.zhou中文网</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header"> 
				<!-- Mobile Toggle Menu Button -->
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
				<a class="navbar-brand" href="index.html">Jay.zhou中文网</a>
				</div>
				<div id="fh5co-navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.html"><span>主页 <span class="border"></span></span></a></li>
						<li><a href="right-sidebar.html"><span>最新资讯 <span class="border"></span></span></a></li>
						<li><a href="left-sidebar.html"><span>专辑首发 <span class="border"></span></span></a></li>
						<li><a href="elements.html"><span>杰印象 <span class="border"></span></span></a></li>
						@if (Auth::guest())
							<li><a href="/auth/login"><span>登陆 <span class="border"></span></span></a></li>
							<li><a href="/auth/register"><span>注册 <span class="border"></span></span></a></li>
						@else
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
								   aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="/auth/logout">退出</a></li>
								</ul>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- END .header -->
	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >手机网站模板</a></div>
	<div class="fh5co-slider">
		<div class="owl-carousel owl-carousel-fullwidth">
		    <div class="item" style="background-image:url(images/slide_1.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">Booster Studio</h1>
									<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/slide_2.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">A Digital Studio</h1>
									<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/slide_3.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">Branding, UX under in one roof</h1>
									<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		    <div class="item" style="background-image:url(images/slide_4.jpg)">
		    	<div class="fh5co-overlay"></div>
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-8 col-md-offset-2">
			    			<div class="fh5co-owl-text-wrap">
						    	<div class="fh5co-owl-text text-center to-animate">
						    		<h1 class="fh5co-lead">Creative Folks</h1>
									<h2 class="fh5co-sub-lead">Booster is a free responsive HTML5 template using bootstrap released under Creative Commons 3.0. Lovely crafted by More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></h2>
						    	</div>
						    </div>
					    </div>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>	
	<div id="fh5co-main">
		<!-- Features -->

		<div id="fh5co-features">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="fh5co-section-lead">Key Words</h2>
						<h3 class="fh5co-section-sub-lead">{{ Inspiring::quote() }}</h3>
					</div>
					<div class="fh5co-spacer fh5co-spacer-md"></div>
				</div>
				<div class="row">
					@foreach($pages as $page)
					<div class="col-md-12 col-sm-12 fh5co-feature-border">
						<div class="fh5co-feature border">
							<div class="fh5co-feature-icon to-animate">
								<i class="icon-list"></i>
							</div>
							<div class="fh5co-feature-text">
								<h3>{{$page->title}}</h3>
								<p>{{$page->body}}</p>
								<p><a href="{{ URL('pages/'.$page->id) }}">Read more</a></p>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- Features -->


		<div class="fh5co-spacer fh5co-spacer-lg"></div>		
		<!-- Products -->
		<div class="container" id="fh5co-products">
			<div class="row text-left">
				<div class="col-md-8">
					<h2 class="fh5co-section-lead">专辑首发</h2>
					<h3 class="fh5co-section-sub-lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</h3>
				</div>
				<div class="fh5co-spacer fh5co-spacer-md"></div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_1.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Lorem ipsum</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_2.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Architecto nihil</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="visible-sm-block visible-xs-block clearfix"></div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_3.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Animi earum</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-mb30">
					<div class="fh5co-product">
						<img src="images/slide_4.jpg" alt="FREEHTML5.co Free HTML5 Template Bootstrap" class="img-responsive img-rounded to-animate">
						<h4>Recusandae iste</h4>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<p><a href="#">Read more</a></p>
					</div>
				</div>
				
			</div>
		</div>
		<!-- Products -->
		<div class="fh5co-spacer fh5co-spacer-lg"></div>

		<div id="fh5co-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_1.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_2.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="visible-sm-block visible-xs-block clearfix"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_3.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
					<div class="col-md-3 col-sm-6 col-xs-6 col-xxs-12 fh5co-client-logo text-center to-animate"><img src="images/client_4.png" alt="FREEHTML5.co Free HTML5 Bootstrap Template" class="img-responsive"></div>
				</div>
			</div>
		</div>

		<div class="fh5co-bg-section" style="background-image: url(images/slide_2.jpg); background-attachment: fixed;">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="fh5co-hero-wrap">
							<div class="fh5co-hero-intro text-center">
								<h1 class="fh5co-lead"><span class="quo">&ldquo;</span>Design is not just what it looks like and feels like. Design is how it works. <span class="quo">&rdquo;</span></h1>
								<p class="author">&mdash; <cite>Steve Jobs</cite></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<footer id="fh5co-footer">
		
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="fh5co-footer-widget">
						<h2 class="fh5co-footer-logo">Booster</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
					</div>
					<div class="fh5co-footer-widget">
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-youtube"></i></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-sm-6">
					<div class="fh5co-footer-widget top-level">
						<h4 class="fh5co-footer-lead ">Company</h4>
						<ul>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Support</a></li>
							<li><a href="#">Career</a></li>
						</ul>
					</div>
				</div>
				
				<div class="visible-sm-block clearfix"></div>

				<div class="col-md-2 col-sm-6">
					<div class="fh5co-footer-widget top-level">
						<h4 class="fh5co-footer-lead">Features</h4>
						<ul class="fh5co-list-check">
							<li><a href="#">Lorem ipsum dolor.</a></li>
							<li><a href="#">Ipsum mollitia dolore.</a></li>
							<li><a href="#">Eius similique in.</a></li>
							<li><a href="#">Aspernatur similique nesciunt.</a></li>
							<li><a href="#">Laboriosam ad commodi.</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="fh5co-footer-widget top-level">
						<h4 class="fh5co-footer-lead ">Products</h4>
						<ul class="fh5co-list-check">
							<li><a href="#">Lorem ipsum dolor.</a></li>
							<li><a href="#">Ipsum mollitia dolore.</a></li>
							<li><a href="#">Eius similique in.</a></li>
							<li><a href="#">Aspernatur similique nesciunt.</a></li>
							<li><a href="#">Laboriosam ad commodi.</a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="row fh5co-row-padded fh5co-copyright">
				<div class="col-md-5">
					<p><small>&copy; Booster Free HTML5 Template. All Rights Reserved. <br>More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> | Images by: <a href="#" target="_blank">DeathToTheStockPhoto</a> </small></p>
				</div>
			</div>
		</div>

	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	
	</body>
</html>
