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
						<h1 id="fh5co-logo"><a href="index.php">BW</a></h1>
						<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li><a href="about.php">About</a></li>
                            <li><a href="#" class="fh5co-sub-ddown">Signup/Login</a>
                                <ul class="fh5co-sub-menu">
                                    <li><a href="signup.php">Sign Up</a></li>
                                    <li><a href="login.php">Login</a></li>
                                </ul>
					</nav>
					</div>
				</div>
			</header>

		</div>
