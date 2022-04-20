<?php

include "up.php";
include "menu.php";
?>

<script>
setActive(2);
</script>

<div class=container>
	<div class=row>
	<div class=col-md-3>
	</div>
	<div class=col-md-6>
	
		<form action="" id="frmsignup" method="post">
		  <div class="form-group">
			<label for="username">Username:</label>
			<input type="username" class="form-control" id="usr" name="usr" placeholder="Type your username, ex : kk1234" required>
		  </div>
		  <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Type your password, ex : 1234@#1" required>
		  </div>
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="nm" name="nm" placeholder="Type your name, ex : kostas" required>
		  </div>
		  <div class="form-group">
			<label for="lastname">Lastname:</label>
			<input type="text" class="form-control" id="lm" name="lm" placeholder="Type your lastname, ex : kefalas" required>
		  </div>
		  <div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="em" name="em" placeholder="Type your email, ex : kkefalas00@gmail.com" required>
		  </div>
		  
		  <button type="submit" class="btn btn-default">Sign Up</button>
		</form>
		</div>
		
		<div class=col-md-3>
		</div>
		
	</div>
	<div class=row>
		<div class=col-md-4>
		</div>
		<div class=col-md-4>
			<div id=message>
				
			</div>
		</div>
		</div>
		<div class=col-md-4>
		</div>
	</div>
</div>
<?php
include "down.php";

?>