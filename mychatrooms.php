<?php

include "up.php";
include "menu.php";
?>

<script>
getmychatrooms();

</script>


<div class=container>

	<div class=row>

		<div class=col-md-3>
		
		</div>
		<div class=col-md-6>
		<h1 style='margin-left:120px;';>Your personal chats:</h1>
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
	

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">DELETE CHAT</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you want to delete this chat?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='deletemychat()'>Yes</button><button type="button" class="btn btn-danger" data-dismiss="modal">No</button> 
      </div>

    </div>
  </div>

</div>

<script>
setActive(6);
</script>

<?php

include "down.php";
?>