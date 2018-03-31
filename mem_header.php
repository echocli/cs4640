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
			<header id="fh5co-header-section" top="10%">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="homepage.php">BW</a></h1>
						<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
                            Welcome, <?php echo $_POST["username"]; ?>
							<li><a href="homepage.php">Home</a>
                            <li><a href="Matches.php">Matches</a></li>
                            <li><a href="Settings.php">Settings</a></li>
                            <li><form action="Logout.php" method="post"><input type="submit" value="Logout"></form></li>
						</ul>
					</nav>
					</div>
				</div>
			</header>
			
		</div>
