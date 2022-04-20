<?php

include "up.php";
include "menu.php";
?>

<script>
gettochat(<?php echo $_GET['idchat'];?>);
</script>

<div class=container>

	<div class=row>
		<div class=col-md-3>
		</div>
		<div class=col-md-6>
		<input type=hidden name='idchat' id="idchat">
			<div id=dd1>
			
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

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Member log out</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you want to log out from the chat?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='log()'>Yes</button><button type="button" class="btn btn-danger" data-dismiss="modal">No</button> 
      </div>

    </div>
  </div>

</div>

</div>
<?php

include "down.php";
?>