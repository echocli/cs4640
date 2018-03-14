<script type="text/javascript">
function userTaken()
{
	alert("Username and/or Email is taken");
}
	
</script>
<?php

$link = mysqli_connect("localhost", "root", "p", "baewatch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//header("Location: index.php");
if (isset($_POST["submitbtn"]) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['birthdate']) && isset($_POST['gender']) && isset($_POST['password'])){

	//header("Location: index.php");

	$firstnameInsert = $_POST['firstname'];
    $lastnameInsert = $_POST['lastname'];
    $usernameInsert = $_POST['username'];
    $emailInsert = $_POST['email'];
    $birthdateInsert = $_POST['birthdate'];
    $genderInsert = $_POST['gender'];
    $passwordInsert = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

	$stmt = $link->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
	$stmt->bind_param("ss", $usernameInsert, $emailInsert);
	$result = $stmt->execute();

	/*$stem = $link->prepare("SELECT * FROM users WHERE email = ?");
	$stem->bind_param("s", $emailInsert);
	$res = $stem->execute();*/
	//check if username is taken
	$assoc_array = array();
	while($row = $stmt->fetch()){
		array_push($assoc_array, $row);
	}
	//check is email is taken
	/*
	$assoc_array_em = array();
	while($row_em = $stem->fetch()){
		array_push($assoc_array_em, $row_em);
	}*/
	//if both are taken
	/*if (count($assoc_array_em) >= 1 && count($assoc_array) >= 1) {
      echo '<script> bothTaken(); </script>';  
    } */
    if (count($assoc_array) >= 1) {
      echo '<script> userTaken(); </script>'; 
    }/*
    else if (count($assoc_array_em) >= 1) {
      echo '<script> emailTaken(); </script>';
    }*/
    else {
      //$sql = "INSERT INTO users (name, email, address, city, state, zipcode, password) 
      //VALUES ('$usernameInsert', '$emailInsert', '$addressInsert', '$cityInsert', '$stateInsert', '$zipcodeInsert', '$passwordInsert')";
     echo '<script> userNotTaken(); </script>';

     $stmt_two = $link->prepare("INSERT INTO users (firstname, lastname, username, email, birthdate, gender, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
	
	 $stmt_two->bind_param("sssssss", $firstnameInsert, $lastnameInsert, $usernameInsert, $emailInsert, $birthdateInsert, $genderInsert, $passwordInsert);


      if($stmt_two->execute()){
          echo "Records added successfully.";
          //header("Location: success.php");
          $stmt_two->close();
		  //$link->close();
      } else{
      	
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
          
      }
     // function SendMail( $ToEmail) {
      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer(true);

      $mail->SMTPDebug = 4;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp1.gmail.com;smtp2.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'baewatch.help@gmail.com';                 // SMTP username
      $mail->Password = 'HelloHello!';                           // SMTP password
      $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 587;                                    // TCP port to connect to

      $mail->setFrom('baewatch.help@gmail.com', 'baeWatch Support');
      $mail->addAddress($emailInsert, $usernameInsert);     // Add a recipient

      $mail->isHTML(true);                                  // Set email format to HTML

      $mail->Subject = 'Welcome to baeWatch!';
      $mail->Body    = 'Thanks for joining! We look forward to you exploring your options. <br> <br> Sincerely, <br> baeWatch Team';
      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo 'Message has been sent';
      }
    
    //header("Location: login.php");
    	//$link->close();
    }
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

		function isTaken($name){
			$usernameIn = $name;
		    
		    $st = $link->prepare("SELECT * FROM users WHERE username = ?");
			$st->bind_param("s", $usernameIn);
			$result = $stmt->execute();
			$assoc_array = array();
			while($row = $stmt->fetch()){
				array_push($assoc_array, $row);
			}
		    if (count($assoc_array) >= 1) {
		      	echo "false";
		    }
		    else{
		    	echo "true";
		    }

		}
	?>
		
	<div class="fh5co-hero" style="height: 300px;">
		<div class="fh5co-overlay" style="height: 300px;"></div>
		<div class="fh5co-cover text-center" style="color: #F2E9E5; height: 300px;">
			<div class="desc animate-box">
				<h2 style="padding-top: 0.5em;">Join Today!</h2>
			</div>
		</div>

	</div>
		<!-- END: header -->


	<script>
	$(document).ready(function(){
		$('#firstname').on('input', function() { 
			var input=$(this);
			var re = /^[a-zA-Z]+$/;
			var is_firstname=re.test(input.val()); 
			var error = $("#firstname_err").is(":visible");
			if(!is_firstname){
				$("#firstname_err").show();
			}
			else{
				$("#firstname_err").hide();
			}
		} );
		$('#lastname').on('input', function() { 
			var input=$(this);
			var re = /^[a-zA-Z]+$/;
			var is_lastname = re.test(input.val()); 
			var error = $("#lastname_err").is(":visible");
			if(!is_lastname){
				$("#lastname_err").show();
			}
			else{
				$("#lastname_err").hide();
			}
		} );
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
		/* PASSWORD CONFIRM CODE -- ALSO NEED TO VALIDATE GENDERS BEEN PICKED
		$('#submitbtn').click(function() { 
			var conpass = $("#confirm_password");
			var pass = $("#password");
			if(conpass != pass){
				$("#confirmpass_err").show();
			}
			else{
				$("#confirmpass_err").hide();
			}
		} );
		*/
		$('#birthdate').on('input', function() { 
			var age =  18;
			var mydate = new Date($("#birthdate").val());


			var currdate = new Date();
			currdate.setFullYear(currdate.getFullYear() - age);

			if(currdate < mydate)
			{
			    $("#birthdate_err").show();
			}
			else{
				 $("#birthdate_err").hide();
			}
		} );
		$('#confirm_password').on('input', function() { 
			var input=$(this).val();
			var pass = $("#password").val();
			if(input != pass){
				$("#confirmpass_err").show();
			}
			else{
				$("#confirmpass_err").hide();
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

			<div class="container">
				<form action="" method="post" name="signupform">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label id="firstname_label">First name</label>
								<label hidden id="firstname_err" style="color: red; padding-left: 1em;"> Only letters allowed </label>
								<input type="text" class="form-control" required autocomplete="on" name="firstname" id='firstname' maxlength="50" pattern="[A-Za-z]{1,50}" title="Name must only be letters" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last name</label>
								<label hidden id="lastname_err" style="color: red; padding-left: 1em;"> Only letters allowed </label>
								<input type="text" class="form-control" required autocomplete="on" name="lastname" id="lastname" maxlength="50" pattern="[A-Za-z]{1,50}" title="Name must only be letters" value="<?php echo isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Username</label>
								<label hidden id="username_err" style="color: red; padding-left: 1em;"> Only letters and numbers allowed </label>
								<label hidden id="username_err2" style="color: red; padding-left: 1em;"> Username is already taken </label>
								<input type="text" class="form-control" required autocomplete="on" name="username" id="username" maxlength="50" pattern="[A-Za-z0-9]{1,50}" title="Username is only letters and numbers" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<label hidden id="email_err" style="color: red; padding-left: 1em;"> Email must be valid </label>	
								<input type="email" class="form-control" name="email" id="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Email must follow @ . format" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"/>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Birthdate</label>
								<label hidden id="birthdate_err" style="color: red; padding-left: 1em;"> Must be at least 18 to register </label>
								<input type="date" class="form-control" required name="birthdate" id="birthdate" min="1900-01-01" max="2000-01-01" value="<?php echo isset($_POST['birthdate']) ? $_POST['birthdate'] : '' ?>"/>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gender</label>
								<div class="select-style">
                					<select required id= "gender" name="gender" >
                						<option value="" disabled selected>Select option</option>
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
								<label hidden id="confirmpass_err" style="color: red; padding-left: 1em;"> Passwords must match </label>	
								<input type="password" class="form-control" required name="confirm_password" id="confirm_password" minlength="8" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input id="submitbtn" name="submitbtn" type="submit" value="Signup" class="btn btn-primary">
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

