<?php

include "up.php";
include "menu.php";

?>


<div class=container>

	<div class=row>

		<div class=col-md-3>
		</div>
		
		<div class=col-md-6>
	
			<form action="" id="frmsgnuptochat" method="post">
			  <div class="form-group">
			  
				<select  class="form-control" id="mst"  name='mst'>
					<option selected=true disabled hidden>--Choose your request--</option>
					<option value="0" type=number>Request</option>
				</select>
			  </div>
			  <div class="form-group">
			  <input type=text hidden value=<?php echo $_GET['idchat'];  ?> name=idchat>
			  </div>
			  <button type="submit" class="btn btn-default">Send your request</button>
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

<?php

include "down.php";
?>