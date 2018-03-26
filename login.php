<script type="text/javascript">
function invalid()
{
  alert("Username/password is invalid."); // this is the message in ""
}
</script>

<?php

$link = mysqli_connect("localhost", "yuyitaylor", "demeyuma1", "phpmyadmin");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if ( isset($_POST["btnSubmit"]) && isset($_POST['usernameInput']) && isset($_POST['passwordInput']) ) {
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];

    $sql = "SELECT * FROM siteusers WHERE name = '".$username."' && 
    password = '".$password."'";
    $query=mysqli_query($link,$sql);
    $count=mysqli_num_rows($query);
   // $row=mysqli_fetch_array($query);

    if ($count==1)
    {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['loggedin'] = true;
        header("location: login_success.php");
    }
    else
    {
        echo '<script>invalid()</script>';
    }   
    /*
    $username = $_POST['usernameInput'];
    $password = $_POST['passwordInput'];

    $sql = "SELECT password FROM siteusers WHERE name = '$username'";
    $result = mysqli_query($link,$sql);

    if (!$result) {
        echo '<script>invalid()</script>';
    }

    if (mysql_num_rows($result) == 0) {
        echo '<script>invalid()</script>';
    }

    $row = mysql_fetch_assoc($result);

    if ($row["password"]==$password) {
        header("Location: member.html");
    }
    else {
         header("Location: index.html");
    }*/
}


 
// Close connection
mysqli_close($link);

?>

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

	<?php 
		include 'nonmem_header.php';
	?>
		
	<div class="fh5co-hero" style="height: 300px;">
		<div class="fh5co-overlay" style="height: 300px;"></div>
		<div class="fh5co-cover text-center" style="color: #F2E9E5; height: 300px;">
			<div class="desc animate-box">
				<h2 style="padding-top: 0.5em;">Welcome Back!</h2>
			</div>
		</div>

	</div>
		<!-- END: header -->


	<script>
	$(document).ready(function(){
		$('#username').on('input', function() { 
			var input=$(this);
			var re = /^[a-zA-Z0-9]+$/;
			var is_username = re.test(input.val()); 
			var error = $("#username_err").is(":visible");
			if(!is_username){
				$("#username_err").show();
			}
			else{
				$("#username_err").hide();
			}

		} );
		$('#email').on('input', function() { 
			var input=$(this);
			var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
			var is_email = re.test(input.val()); 
			var error = $("#email_err").is(":visible");
			if(!is_email){
				$("#email_err").show();
			}
			else{
				$("#email_err").hide();
			}
		} );
		$('#password').on('input', function() { 
			var input=$(this).val();
			var pass = $("#confirm_password").val();
			if(input != pass){
				$("#confirmpass_err").show();
			}
			else{
				$("#confirmpass_err").hide();
			}
		} );
	});
	</script>

		<div id="fh5co-contact" class="animate-box">

<div class="container" style="text-align: center; width: 50%; align-content: center;">
				<form action="" method="post" name="signupform" style="text-align: center; width: 100%;">
					<div class="row" style="text-align: center; width: 100%;">
						<div class="col-md-6" style="text-align: center; width: 100%;">
							<div class="form-group" style="text-align: center; width: 100%;">
								<label style="text-align: center; width: 100%;"> Email or Username</label>
								<label hidden id="email_err" style="color: red; padding-left: 1em;"> Email must be valid </label>	
								<input type="email" class="form-control" name="email" id="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Email must follow @ . format" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6" style="text-align: center; width: 100%;>
							<div class="form-group" style="text-align: center; width: 100%;">
								<label style="text-align: center; width: 100%;" >Password</label>
								<input type="password" class="form-control" required name="password" id="password" minlength="8"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12" style="text-align: center; width: 100%;>
							<div class="form-group">
								<input id="submitbtn" name="submitbtn" type="submit" value="Login" class="btn btn-primary" >
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

