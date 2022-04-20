<?php

include "up.php";
include "menu.php";
?>

<div class=container>

	<div class=row>
		<div class=col-md-3>
		</div>
		<div class=col-md-6>
		
			<form action="" id="frmcreateroom" method="post">
				  <div class="form-group">
					<label for="room name">Room name:</label>
					<input type="name" class="form-control" id="rmn" name="rmn" placeholder="Type your chat room name, ex : kk1234" required>
				  </div>
				  
				  <button type="submit" class="btn btn-default">Create</button>
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
setActive(5);
</script>


<?php
include "down.php";

?>