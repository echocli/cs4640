
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Render &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

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

	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

		<?php include 'nonmem_header.php';?>
		
		<div class="fh5co-hero" style="height: 300px;">
			<div class="fh5co-overlay" style="height: 300px;"></div>
			<div class="fh5co-cover text-center" style="background-image: url(images/work-1.jpg); height: 300px;">
				<div class="desc animate-box">
					<h2 style="padding-top: 0.5em;">Join Today!</h2>
				</div>
			</div>

		</div>
		<!-- END: header -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){

		$('form-control').css('border-bottom', '1px solid red');

		$('#firstname').on('input', function() {
			alert("hi");
			var input=$(this);
			var re = /^[a-zA-Z]+$/;
			var is_firstname=re.test(input.val());
			if(is_firstname){input.removeClass("form-control.error").addClass("form-control");}
			else{input.removeClass("form-control").addClass("form-control.error");}
		});

		$("#signupform").validate({
		  rules: {
		    firstname: {
		    	required: true,
		      	email: true
		    }
		    email: {
		      	required: true,
		      	email: true
		    }
		  },
		  messages: {
		    firstname: "Enter your firstname",
			lastname: "Enter your lastname",
			username: {
					required: "Enter a username",
					minlength: jQuery.validator.format("Enter at least {0} characters"),
					remote: jQuery.validator.format("{0} is already in use")
			},
			email: {
					required: "Please enter a valid email address",
					minlength: "Please enter a valid email address",
					remote: jQuery.validator.format("{0} is already in use")
			}
		  },
		  errorPlacement: function(error, element) {
				error.insertBefore(element);
			}
		});
	});
	</script>

		<div id="fh5co-contact" class="animate-box">

			<div class="container">
				<form action="signup.php" method="post" name="signupform">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First name</label>
								<input type="text" class="form-control" required autocomplete="on" name="firstname" id="firstname" maxlength="50" pattern="[A-Za-z]{1,50}" title="Name must only be letters"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last name</label>
								<input type="text" class="form-control" required autocomplete="on" name="lastname" id="lastname" maxlength="50" pattern="[A-Za-z]{1,50}" title="Name must only be letters"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control" required autocomplete="on" name="username" id="username" maxlength="50" pattern="[A-Za-z0-9]{1,50}" title="Username is only letters and numbers"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>	
								<input type="email" class="form-control" name="email" id="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Email must follow @ . format"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Birthdate</label>
								<input type="date" class="form-control" required name="birthdate" id="birthdate"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gender</label>
								<div class="select-style">
                					<select name="gender">
                    					<option value="F">Female</option>
                    					<option value="M">Male</option>
                    					<option value="TF">Trans Female</option>
                    					<option value="TM">Trans Male</option>
                    					<option value="NB">Nonbinary</option>
                    				</select>
                    			</div>

							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" required name="password" id="password" minlength="8"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Confirm password</label>	
								<input type="password" class="form-control" required name="confirm_password" id="confirm_password" minlength="8" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" value="Signup" class="btn btn-primary">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- START a project -->

		<?php include 'nonmem_footer.php';?>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

