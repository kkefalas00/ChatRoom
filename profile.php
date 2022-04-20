<?php

include "up.php";
include "menu.php";
?>
<script>

getprofiledata();

</script>
<div class=container>

<div class=row>
	<div class=col-md-3>
	</div>
	<div class=col-md-6>
	<h1 style='margin-left:150px;';>Personal Details:</h1>
		<form action="" id="frmprofile" method="post">
		  <div class="form-group">
			<label for="username">Username:</label>
			<input type="username" class="form-control" id="usr" name="usr" placeholder="Type your username, ex : kk1234" required value="">
		  </div>
		  <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Type your password, ex : 1234@#1" value="">
		  </div>
		  <div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="nm" name="nm" placeholder="Type your name, ex : kostas" required value="">
		  </div>
		  <div class="form-group">
			<label for="lastname">Lastname:</label>
			<input type="text" class="form-control" id="lm" name="lm" placeholder="Type your lastname, ex : kefalas" required value="">
		  </div>  
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
		</div>
		
		<div class=col-md-3>
		</div>
		<div class=row>
			<div class=col-md-4>
			</div>
			<div class=col-md-4>
				<div id=message>
				</div>
			</div>
			<div class=col-md-4>
			</div>
	</div>
		
</div>

</div>



<script>
setActive(4);
</script>

<?php
include "down.php";

?>