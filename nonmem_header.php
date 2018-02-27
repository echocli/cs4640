	</head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		var sPath = window.location.pathname;
    	var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
    	$('a[href="'+ sPage +'"]').parent().addClass('active');
	});
	</script>

	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
		<!--
			<div class="top">
				<div class="container">
					<span> <a href="#"><i>@</i> info@freehtml5.co</a></span>
					<span> <a href="tel://+12345678910"><i class="icon-mobile3"></i> 123 4567 8910</a></span>
				</div>
			</div>
		-->
			<!-- end:top -->
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Render</a></h1>
						<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<!--
							<li>
								<a href="portfolio.html">Portfolio</a>
							</li>
							<li>
								<a href="services.html" class="fh5co-sub-ddown">Services</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="left-sidebar.html">Web Development</a></li>
								 	
								 	<li><a href="right-sidebar.html">Branding &amp; Identity</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">Free HTML5</a>
										<ul class="fh5co-sub-menu">
											<li><a href="http://freehtml5.co/preview/?item=build-free-html5-bootstrap-template" target="_blank">Build</a></li>
											<li><a href="http://freehtml5.co/preview/?item=work-free-html5-template-bootstrap" target="_blank">Work</a></li>
											<li><a href="http://freehtml5.co/preview/?item=light-free-html5-template-bootstrap" target="_blank">Light</a></li>
											<li><a href="http://freehtml5.co/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">Relic</a></li>
											<li><a href="http://freehtml5.co/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">Display</a></li>
											<li><a href="http://freehtml5.co/preview/?item=sprint-free-html5-template-bootstrap" target="_blank">Sprint</a></li>
										</ul>
									</li>
									
									<li><a href="#">UI Animation</a></li>
									<li><a href="#">Copywriting</a></li>
									<li><a href="#">Photography</a></li> 
								</ul>
							</li>
							-->
							<li><a href="about.php">About</a></li>
							<li><a href="signup.php">Signup/Login</a></li>
							<!--<li><a href="contact.html">Contact</a></li>-->
						</ul>
					</nav>
					</div>
				</div>
			</header>
			
		</div>