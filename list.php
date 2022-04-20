<?php

include "up.php";
include "menu.php";
?>


<script>
getlists();
</script>

<div class=container>

<div class=row>
	Search: <input type=text id=search1>
	<br><br>
</div>

	<div class=row>

		<div class=col-md-3>
		
		</div>
		<div class=col-md-6>
		<h1 style='margin-left:100px;';>List of active chats:</h1>
			<div class=chats>
			
			</div>
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
setActive(3);
</script>

<?php

include "down.php";

?>