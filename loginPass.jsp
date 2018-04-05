<script type="text/javascript">
window.onload = function(){
  document.forms['signup'].submit();
}

</script>

<form hidden action="${pageContext.request.contextPath}/LoginController" method="POST" name="signup">
	<div class="form-group">
		<input type="text" value="echo" class="form-control" name="username" id="username"/>
<!--<input  type="text" value="' .$_SESSION['firstname'].'"class="form-control" required name="firstname" id="firstname"/>
<input  type="text" value="' .$_SESSION['lastname']. '"class="form-control" required name="lastname" id="lastname"/>
		<input hidden id="submitbtn" name="submitbtn" type="submit" value="Submit" class="btn btn-primary" > -->
	</div>
</form>
