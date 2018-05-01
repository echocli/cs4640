<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
pageEncoding="ISO-8859-1"%>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

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

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-sanitize.js"></script>

<jsp:include page="mem_header.php"/>

<div class="fh5co-hero" style="height: 300px;">
    <div class="fh5co-overlay" style="height: 300px;"></div>
    <div class="fh5co-cover text-center" style="color: #F2E9E5; height: 300px;">
        <div class="desc animate-box">
            <h2 style="padding-top: 0.5em;">
            <% String user = (String)session.getAttribute("user");
                if (user != null) { %>
                    <% String email = (String)session.getAttribute("user"); %>
                    <h1> Hello, <%= user %> </h1>
               <% }
               else {
                    response.sendRedirect("login.php");
                } %>
            </h2>
        </div>
    </div>

</div>
<!-- end:header-top -->
<br>

<!-- Sidebar -->
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'General')" id="defaultOpen">General</button>
  <button class="tablinks" onclick="openCity(event, 'Books')">Books</button>
  <button class="tablinks" onclick="openCity(event, 'Movies')">Movies</button>
</div>


<div class="container" style="align-self: center;">
<form action="" method="post" name="form" style="width: 100%;">
    <div id="General" class="tabcontent">
        <div class="row" style="width: 100%; padding: 1em 1em;">
            <div class="col-md-6" style="width: 100%;">
                <h3> Personal </h3>
                <label style="float: left; width: 20%;"> Age Range </label>
                <input type="number" style="width: 10%; float: left;" class="form-control" name="ageMin" id="ageMin" min="18" required />
                <label style="float: left; padding: 0 0.5em;"> to </label>
                <input type="number" style="width: 10%; float: left;" class="form-control" name="ageMax" id="ageMax" max="110" required/>
            </div>
        </div>
        <div class="row" style="padding: 1em 1em;">
            <div class="col-md-6" style="width: 100%;">
                <label style="float: left; padding-right: 1.5em;"> Sexual Preference </label>
                 <select style="float: left;" required id="educationLevel" name="educationLevel">
                    <option value="" disabled selected>Select</option>
                    <option value="women">Women</option>
                    <option value="men">Men</option>
                    <option value="both">Both</option>
                </select>
            </div>
        </div>
        <div class="row" style="padding: 1em 1em;">
            <div class="col-md-6" style="width: 97%;">
                <label style="float: left; width: 20%;"> Height Range </label>
                <input type="number" style="width: 10%; float: left;" class="form-control" name="heightMin" id="heightMin" required/>
                <label style="float: left; padding: 0 0.5em;"> to </label>
                <input type="number" style="width: 10%; float: left;" class="form-control" name="heightMax" id="heightMax" required/>
                <label style="float: left; padding: 0 0.5em;"> CM </label>
            </div>
        </div>
        <div class="row" style="padding: 1em 1em;">
            <div class="col-md-6" style="width: 100%;">
                <h3> Education </h3>
                <label style="float: left; padding-right: 1.5em;"> Highest Degree Earned </label>
                 <select style="float: left;" required id="educationLevel" name="educationLevel">
                    <option value="" disabled selected>Select</option>
                    <option value="high school">High School</option>
                    <option value="associates">Associate's</option>
                    <option value="bachelors">Bachelor's</option>
                    <option value="masters">Master's</option>
                    <option value="doctoral">Doctoral</option>
                </select>
            </div>
        </div>

    </div>


    <div ng-app="myApp" ng-controller="myCtrl">

        <div id="Books" class="tabcontent">
            <div class="row" style="width: 100%; padding: 1em 1em;">
                <div class="col-md-6" style="width: 100%;">
                    <h3> Titles/Series/Authors </h3>
                    <input type="text" placeholder="Search..." style="width: 60%; float: left;" class="form-control" name="booksInput" id="booksInput" required
                    ng-model="booksInput" ng-keydown="$event.keyCode === 13 && bookEnter()" ng-bind="bookInput"/>
                    
                    <table>
                        <tr ng-repeat="book in bookNames">
                            <td>{{book.name}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>

        <div id="Movies" class="tabcontent">
            <div class="row" style="width: 100%; padding: 1em 1em;">
                <div class="col-md-6" style="width: 100%;">
                    <h3> Titles/Series/Directors </h3>
                    <input type="text" placeholder="Search..." style="width: 60%; float: left;" class="form-control" name="moviesInput" id="moviesInput" required ng-model="moviesInput" ng-keydown="$event.keyCode === 13 && movieEnter()" ng-bind="moviesInput"/>
                    <table>
                        <tr ng-repeat="movie in movieNames">
                            <td>{{movie.name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
</form>

</div>

<jsp:include page="mem_footer.php"/>
<script>
function openCity(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

var app = angular.module("myApp", ['ngSanitize']);
app.controller("myCtrl", function($scope) {

    $scope.bookNames = [
                        {'name':'Harry Potter'},
                        ];
    $scope.bookEnter = function(){   
        $scope.bookNames.push({ 'name':$scope.booksInput });
        $scopes.bookInput = "";

        
    };

    $scope.movieNames = [
                        {'name':'Harry Potter'},
                        ];

    $scope.movieEnter = function(){   
        $scope.movieNames.push({ 'name':$scope.moviesInput });
        $scopes.moviesInput = "";
        
    };
});

</script>







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

</html>

