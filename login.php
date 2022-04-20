<?php
include "up.php";
include "menu.php";
?>


<script>
setActive(1);
</script>
	
<div class=container>
	<div class=row>
		<div class=col-md-3>
		</div>
		<div class=col-md-6>
		
			<form action="" id="frmlogin" method="post">
			  <div class="form-group">
				<label for="username">Username:</label>
				<input type="username" class="form-control" id="usr" name="usr" placeholder="Type your username, ex : kk1234">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Type your password, ex : 1234@#1">
			  </div>
			  <button type="submit" class="btn btn-default">Login</button>
			</form>
			</div>
			<div class=col-md-3>
			</div>
	</div>
	
		<div class=row>
		<div class=col-md-4>
		</div>
		<div class=col-md-4>
			<div id="message">
				
			</div>
		</div>
		<div class=col-md-4>
		</div>
	</div>
</div>

<?php
include "down.php";

?>