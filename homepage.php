<script type="text/javascript">
function invalid()
{
    alert("Username/password is invalid."); // this is the message in ""
}
</script>

<?php
    $link = mysqli_connect("localhost", "yuyitaylor", "demeyuma1", "baewatch");
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    if ( isset($_POST["submitbtn"]) && isset($_POST["usersearch"]) ) {
        $search = $_POST['usersearch'];
        $stmt = mysql("SELECT * FROM * WHERE (username = ?");
        $stmt->bind_param("ss", $search, $email);
        $stmt->execute();
        $stmt->bind_result($password);
        $stmt->store_result();
        echo $password;
        if($stmt->num_rows == 1 && $stmt->fetch() && password_verify($passwordInsert, $password)){
            header("location: login_success.php");
        }
        else {
            echo '<script>invalid()</script>';
        }
        $stmt->close();
        
    }
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

    <!-- Header -->

    <?php include 'mem_header.php';?>
        <div class="fh5co-hero" height="50%">
            <div class="fh5co-overlay"></div>
        </div>
    <!-- end:header-top -->

    <h1> Welcome <?php echo $_POST["firstname"]; ?></h1>
    <br>

    <!-- Sidebar -->
    <div class="navbar-left">
        <h3> Preferences </h3>
        <u1>
            <li><a href="#">Hobbies</a></li>
            <li><a href="#">TV and Movies</a></li>
            <li><a href="#">Music</a></li>
            <li><a href="#">Books</a></li>
        </ul>
    </div>


    <!--Match section-->
    <div id="fh5co-services-section" class="border-bottom">

        <div class="container">
            <div class="row">
                <div class="col-md-3 animate-box">
                    <h3 size="40px">Your Matches</h3>
                </div>
            <div class="col-md-9 col-sm-12">
            <div class="row">

            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-browser"></i></span>
                        <h3>User 1</h3>
                        <p>user bio and stats</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-mobile"></i></span>
                        <h3>User 2</h3>
                        <p>user bio and stats</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-tools"></i></span>
                            <h3>User 3</h3>
                            <p>user bio and stats</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-video"></i></span>
                        <h3>User 4</h3>
                        <p>user bio and stats</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-search"></i></span>
                        <h3>User 5</h3>
                        <p>user bio and stats</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="services animate-box">
                    <span><i class="icon-cloud"></i></span>
                        <h3>User 5</h3>
                        <p>user bio and stats</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Preferences -->
    <div id="fh5co-blog-section"  style="background-color:#FFFFFF">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-sm-12 animate-box" >
                    <h3> Your Preferences </h3>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-9 col-sm-12" >
                    <div class="form-group">
                        <div id="fh5co-contact" class="animate-box">
                            <label> Education </label>
                            <!-- education dropdown -->
                                <div id="fh5co-contact" class="animate-box" style="background-color:#fdfbf3">
                                    <div class="container" style="width: 100%; align-content: center; ">
                                        <form action="" method="post" name="edutype">
                                            <div class="col-md-6" style="width: 100%;">
                                                <div class="form-group">
                                                    <label> Set desired education level for your match </label>
                                                    <div class="select-style">
                                                    <select required id="edu" name="edu">
                                                        <option value="" disabled selected>Select education</option>
                                                        <option value="high school">high school</option>
                                                        <option value="associate's degree">associate</option>
                                                        <option value="bachelor's degree">bachelor</option>
                                                        <option value="master's degree">master</option>
                                                        <option value="doctoral degree">doctoral</option>
                                                    </select>
                                                    </div>
                                                </div>
<h3 style="width:50%"> Percent Match: </h3>
                                                <div class="slider" style="width:100%">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <!-- end education dropdown -->
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 col-sm-12">
                    <div class="form-group">
                        <div id="fh5co-contact" class="animate-box">
                            <label> Movies </label>
                            <!-- Search for movies -->
                                <div id="fh5co-contact" class="animate-box" style="background-color:#fdfbf3">
                                    <div class="container" style="width: 100%; align-content: center; ">
                                        <form action="" method="post" name="moviepref">
                                            <div class="col-md-6" style="width: 100%;">
                                                <div class="form-group">
                                                    <label> Search for movies you enjoy </label>
                                                        <input type="text" class="form-control" name="movie-search" id="movie-search" />
                                                </div>
                                            </div>
                                        </form>
                                    </div
                                </div>
                            <!-- End of movie search -->
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-sm-12">
                    <div class="form-group">
                        <div id="fh5co-contact" class="animate-box">
                            <label> Artists </label>
                            <!-- Search for Artists -->
                                <div id="fh5co-contact" class="animate-box" style="background-color:#fdfbf3">
                                    <div class="container" style="width: 100%; align-content: center; ">
                                        <form action="" method="post" name="artistpref">
                                            <div class="col-md-6" style="width: 100%;">
                                                <div class="form-group">
                                                    <label> Search for artists you like </label>
                                                        <input type="text" class="form-control" name="artist-search" id="artist-search" />
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <!-- End of artist search -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <!-- footer -->

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

