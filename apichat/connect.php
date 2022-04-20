<?php
session_start();
if(!$db=@mysqli_connect("","","",""))
	{
		echo "error in database";
		die();
		
	}
	
mysqli_query($db,"set names 'utf8'");
date_default_timezone_set('Europe/Athens');
?>