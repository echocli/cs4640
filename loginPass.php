<script type="text/javascript">
window.onload = function(){
  document.forms['signup'].submit();
}

</script>

<?php
	session_start();
	/*
	echo '<form hidden action="LoginController" method="post" name="signup">';
	echo '<div class="form-group">';
	echo '<input type="text" value="' .$_SESSION['username']. '"class="form-control" name="email" id="email"/>';
	echo '<input  type="text" value="' .$_SESSION['firstname'].'"class="form-control" required name="firstname" id="firstname"/>';
	//echo '<input  type="text" value="' .$_SESSION['lastname']. '"class="form-control" required name="lastname" id="lastname"/>';
	echo '<input hidden id="submitbtn" name="submitbtn" type="submit" value="Submit" class="btn btn-primary" >';
	echo '</div>';
	echo '</form>';
	echo '<script>submit()</script>';
	*/
?>

<form hidden action="/examples/servlets/servlet/LoginController" method="post" name="signup">
	<div class="form-group">
		<input type="text" value=<?php echo $_SESSION['username']; ?> class="form-control" name="username" id="username"/>
<!--<input  type="text" value="' .$_SESSION['firstname'].'"class="form-control" required name="firstname" id="firstname"/>
<input  type="text" value="' .$_SESSION['lastname']. '"class="form-control" required name="lastname" id="lastname"/>
		<input hidden id="submitbtn" name="submitbtn" type="submit" value="Submit" class="btn btn-primary" > -->
	</div>
</form>
