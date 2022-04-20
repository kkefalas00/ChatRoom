<?php

include "up.php";
include "menu.php";

?>

<script>
getmessages(<?php echo $_GET['idchat'];?>);

setInterval(function(){getmessages(<?php echo $_GET['idchat'];?>);},1000);

</script>

<div class=container>

	<div class=row>
		<div class=col-md-3>
		</div>

			<div class=col-md-6>
				<div id=mtext>
					
				</div>
			</div>
		<div class=col-md-3>
		</div>

	</div>

	<div class=row>

		<div class=col-md-3>
		</div>
		<div class=col-md-6>
			<form action="" id="mychat" method="post">
			  <div class="form-group">
				<input type=hidden name='idc' id=idc class="form-control" value='<?php echo $_GET['idchat'];?>'>
			  </div>
			  <div class="form-group">
			  
				<label for="chatname" id=l1>Write your message:</label><br>
				<textarea id="msgarea" name="msg"   style='color:#0040ff; width:100%; height:100px;'></textarea>
				
			  </div>
			  <button type="submit" class="btn btn-default" id="bt2">Send <span class="glyphicon glyphicon-send"></span></button>
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
				<div class=col-md-4>
				</div>
	</div>

</div>
<script>

</script>
<?php
include "down.php";
?>