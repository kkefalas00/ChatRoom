<?php


if(@$_SESSION['idu']=="")
{


?>



<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li  id="a1"><a href="login.php">LOGIN</a></li>
			<li  id="a2"><a href="signup.php">SIGN UP</a></li>
		  </ul>
		</div>
	  </div>
	</nav>
<?php


}
else
{
?>

<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li id="a3"><a href="list.php">MAIN</a></li>
			<li id="a4"><a href="profile.php">PROFILE</a></li>
			<li id="a5"><a href="createchatroom.php">CREATE CHAT</a></li>
			<li id="a6"><a href="mychatrooms.php">MY CHAT ROOMS</a></li>
			<li><a href="logout.php">LOG OUT</a></li>
		  </ul>
		</div>
	  </div>
</nav>



<?php
}
?>

