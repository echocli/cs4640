<script type="text/javascript">
function invalid()
{
  alert("Username/password is invalid."); // this is the message in ""
}
</script>

<?php
$link = mysqli_connect("localhost", "root", "p", "baewatch");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if ( isset($_POST["submitbtn"]) && isset($_POST['email']) && isset($_POST['password']) ) {
    $email = $_POST['email'];
    //$user = $_POST['email'];
   // $password = $_POST['password'];
	$passwordInsert = $_POST['password'];
	//echo $email;
	//echo $passwordInsert;
	$stmt = $link->prepare("SELECT password FROM users WHERE (username = ? OR email = ?)");
	$stmt->bind_param("ss", $email, $email);
	$stmt->execute();
    $stmt->bind_result($password);
    $stmt->store_result();
    //echo $password;
    if($stmt->num_rows == 1 && $stmt->fetch() && password_verify($passwordInsert, $password)){
        
        session_start();
        $_SESSION['username'] = $email;
        $stmt = $link->prepare("SELECT firstname FROM users WHERE (username = ? OR email = ?)");
		$stmt->bind_param("ss", $email, $email);
		$stmt->execute();
	    $stmt->bind_result($firstname);
	    $stmt->store_result();
	    echo $firstname;
		$_SESSION['firstname'] = $firstname;
		//$lastname = $row['lastname'];
		//$_SESSION['lastname'] = $lastname;
		//echo "hi";
		//echo "$lastname";
		header("location: loginPass.php");

    }
    else {
        echo '<script>invalid()</script>';
    }
    $stmt->close();
   // $row=mysqli_fetch_array($query);  
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
