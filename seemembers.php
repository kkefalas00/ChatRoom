<?php

include "up.php";
include "menu.php";
?>

<script>

getmembers(<?php echo $_GET['idchat'];?>);

</script>



<div class=container>

<div class=row>

	<div class=col-md-3>
	</div>
	<div class=col-md-6>
		<h1 style='margin-left:100px;'>Members of your chat:</h1>
		<input type=hidden name='idmember' id="idmember">
		<div id=chats>
		</div>
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

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Member Approval</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you want to approve this request?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='approve()'>Yes</button><button type="button" class="btn btn-danger" data-dismiss="modal">No</button> 
      </div>

    </div>
  </div>

</div>

</div>






<?php
include "down.php";
?>