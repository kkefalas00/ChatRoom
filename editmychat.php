<?php

include "up.php";
include "menu.php";
?>


<script>

getmychat(<?php echo $_GET['idchat']?>);

</script>

<div class=container>

<div class=row>

	<div class=col-md-3>
	</div>
	<div class=col-md-6>
		<h1 style='margin-left:150px;'>Chat room details:</h1>
		<form action="" id="mychatprof" method="post">
		  <div class="form-group">
			<label for="chatname">Chat name:</label>
			<input type=hidden name='idc' value='<?php echo $_GET['idchat']; ?>'>
			<input type="name" class="form-control" id="chnm" name="chnm" placeholder="Type your new name of your chat, ex : newchat" value="">
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

<?php
include "down.php";

?>