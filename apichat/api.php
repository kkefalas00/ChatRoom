<?php

include "connect.php";

//Sign up users in database dbchat
 
	if($_GET['query']==1)
	{
		$sql="insert into users(uid,email,name,lastname,password,username) 
		values(NULL,'$_POST[em]','$_POST[nm]','$_POST[lm]','".md5($_POST['pwd'])."','$_POST[usr]')";
		
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "false";
		};
	}
	
//login users in database dbchat
 
	if($_GET['query']==2)
	{
		$mypassword=md5($_POST['pwd']); 
		$sql="select * from users where username='$_POST[usr]' and password='$mypassword' ";
		
		$q=mysqli_query($db,$sql);
		
		if(mysqli_num_rows($q)>0)
		{
			$r=mysqli_fetch_assoc($q);
			$_SESSION['idu']=$r['uid'];
			echo "true";
			
		}
		else
		{
			echo "false";
		};
	}
	
//Get profile data
	
	
	if($_GET['query']==3)
	{
		$sql="select * from users where uid='$_SESSION[idu]'";
						
		$q=mysqli_query($db,$sql);
		while($r=mysqli_fetch_assoc($q))
		{
			echo json_encode($r);
		}

	}

//update users

	if($_GET['query']==4)
	{
		if($_POST['pwd']=='')
		{
		
		$sql="update users set name='$_POST[nm]',lastname='$_POST[lm]',username='$_POST[usr]' where uid=$_SESSION[idu]";
		}
		else
		{
			$mypassword=md5($_POST['pwd']); 
		
		$sql="update users set password='$mypassword',name='$_POST[nm]',lastname='$_POST[lm]',username='$_POST[usr]' where uid=$_SESSION[idu]";
		}
		if(mysqli_query($db,$sql))
		{
			echo "ok";
		}
		else
		{
			echo "error";
		}
	}
	
//create chat room
 
	if($_GET['query']==5)
	{
		$sql="insert into rooms values(NULL,'$_POST[rmn]','$_SESSION[idu]')";
		
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "false";
		};
	}
	
//get lists

if($_GET['query']==6)
	{
		$sql="select * from rooms ";
						
		$q=mysqli_query($db,$sql);
		$A=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$A[]=$r;
		}
		
			echo json_encode($A);

	}
	
	
	if($_GET['query']==7)
	{
		$sql="select * from rooms where rid='$_GET[idchat]'";
						
		$q3=mysqli_query($db,$sql);
		$r=mysqli_fetch_assoc($q3);
		if($r["rowner"]==$_SESSION['idu'])
		{	
			$A["rowner"]="owner";
		}
		else
		{	
			$A["rowner"]="noowner";
		}
		
		$sql="select * from members where rid='$_GET[idchat]' and uid='$_SESSION[idu]'";
						
		$q=mysqli_query($db,$sql);
		
		
		if(mysqli_num_rows($q)==0)
			
			{
				$A["status"]="false";				
				
			}
			
		else 
		{
			$r=mysqli_fetch_assoc($q);
			if($r['mstatus']==1)
			{
				$A["status"]="ok";
			}
			else
			{
				$A["status"]="wait";
			}
		}	
		
		echo json_encode($A);
	}
	
	
//Sign up to chat
 
	if($_GET['query']==8)
	{
		$sql="insert into members(mid,mstatus,uid,rid) 
		values(NULL,'$_POST[mst]','$_SESSION[idu]','$_POST[idchat]')";
		
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "false";
		};
	}
	
//get my chatrooms

if($_GET['query']==9)
	{
		$sql="select * from rooms where rooms.rowner=$_SESSION[idu] ";
						
		$q=mysqli_query($db,$sql);
		$A=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$A[]=$r;
		}
			echo json_encode($A);

	}

//edit my chatroom

	
	
	if($_GET['query']==10)
	{
		$sql="select * from rooms where rowner='$_SESSION[idu]' and rid='$_GET[idchat]'";
						
		$q=mysqli_query($db,$sql);
		while($r=mysqli_fetch_assoc($q))
		{
			echo json_encode($r);
		}
	}
	
//update mychat

	if($_GET['query']==11)
	{
		$sql="update rooms set rname='$_POST[chnm]' where rowner='$_SESSION[idu]' and rid='$_POST[idc]'";
		
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "error";
		}
	}
//delete mychat
	
	if($_GET['query']==12)
	{
		$sql="delete from rooms where rowner='$_SESSION[idu]' and rid='$_GET[idchat]'";
		
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "error";
		}
	}
	
//see members of chat

	if($_GET['query']==13)
	{
		$sql="select * from members,users where members.rid='$_GET[idchat]' and members.uid=users.uid";
		$q=mysqli_query($db,$sql);
		$A=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$A[]=$r;
		}
			echo json_encode($A);
		
	}
	
//update members of chat

	if($_GET['query']==14)
	{
		$sql="update members set mstatus='1' where mid='$_GET[idmember]'";
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "error";
		}
		
	}
	
//log out from chat

	if($_GET['query']==15)
	{
		$sql="delete from members where members.rid='$_GET[idchat]' and uid='$_SESSION[idu]'";
		if(mysqli_query($db,$sql))
		{
			echo "true";
		}
		else
		{
			echo "error";
		}
		
	}
	
//Insert to messages

	if($_GET['query']==16)
	{
		
		$d=date('Y-m-d H:i:s');
	$sql="insert into messages(msid,mstext,msdatetime,uid,rid) 
		values(NULL,'$_POST[msg]','$d','$_SESSION[idu]','$_POST[idc]')";
		
		if(mysqli_query($db,$sql))
		{
			
			echo "true";
		}
		else
		{
			echo "false";
			
		};
	}
	
//select messages
	if($_GET['query']==17)
	{
		
		$sql="select * from messages,users where users.uid=messages.uid and rid='$_GET[idchat]' order by messages.msid ";
		$q=mysqli_query($db,$sql);
		$A=[];
		while($r=mysqli_fetch_assoc($q))
		{
			$A[]=$r;
		}
			echo json_encode($A);
	}
?>