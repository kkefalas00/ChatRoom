var ad=new Audio("music/1.mp3");
var pp=0;
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
});
  
//Sign up users in database dbchat
 
$("#frmsignup").submit(function(event){
	
  event.preventDefault();
  
   $.post("apichat/api.php?query=1",$("#frmsignup").serialize(), function(res){
	
		if(res=="true")
		{
		 $("#frmsignup").hide(1000);
		 $("#message").html("<div class='alert alert-success msgs'>New user is inserted<br><a href='login.php'>Go to login page</a></div>");
		}
		else
		{
		 $("#message").html("<div class='alert alert-danger msgd'>Error!Try again to sign up</div>");
		}
	});
});


  
//login users in database dbchat
  
$("#frmlogin").submit(function(event){
  event.preventDefault();
	   $.post("apichat/api.php?query=2",$("#frmlogin").serialize(), function(res){
		   
		if(res=="true")
		{
		 window.location.href='list.php';
		}
		else
		{
			$("#message").html("<div class='alert alert-danger msgd'>Error username or password</div>");
		}
		
	});
});
  
//Update profile after getprofiledata
  
 $("#frmprofile").submit(function(event){
	
		event.preventDefault();
		
		$.post("apichat/api.php?query=4",$("#frmprofile").serialize(),function(res)
		{
			if(res=="ok")
			{
				$("#frmprofile").hide(1000);
				$("#message").html("<div class=\"alert alert-success msgs\"> Your new profile data is saved!</div>");
				
			}
			else
			{
				$("#message").html("<div class=\"alert alert-danger msgd\">Error edit!</div>");
			}
		
		});
});

//Create chatroom

$("#frmcreateroom").submit(function(event){
	
	event.preventDefault();
	$.post("apichat/api.php?query=5",$("#frmcreateroom").serialize(),function(res){
			
				if(res=="true")
				{
					$("#frmcreateroom").hide(1000);
					$("#message").html("<div class=\"alert alert-success msgs\"> Your chat room is created</div>");
					
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error creation!</div>");
				}
			
		});
});


//Sign up to chatroom

$("#frmsgnuptochat").submit(function(event){
	
	event.preventDefault();
	$.post("apichat/api.php?query=8",$("#frmsgnuptochat").serialize(),function(res){
		
				if(res=="true")
				{
					$("#frmsgnuptochat").hide(1000);
					$("#message").html("<div class=\"alert alert-success msgs\"> Your request is sent</div><br><div><a href='list.php'><button>Go to main page</button></a></div>");
					
					
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error in your request</div>");
				}
			
		});
});


//Update my chat

$("#mychatprof").submit(function(event){
	
	event.preventDefault();
	$.post("apichat/api.php?query=11",$("#mychatprof").serialize(),function(res){
		
				if(res=="true")
				{
					$("#mychatprof").hide(1000);
					$("#message").html("<div class=\"alert alert-success msgs\">The new name of chat is saved</div>");
					
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error during process</div>");
				}
			
		});
});


$("#search1").keyup(function(){
		
		var s1=$(this).val().toLowerCase();
		$("#tt1 tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(s1) > -1)
    });
		
	
});

//post messages

$("#mychat").submit(function(event){
	
	event.preventDefault();
	$.post("apichat/api.php?query=16",$("#mychat").serialize(),function(res){
	
		
				if(res=="true")
				{
					
					$("#msgarea").val("");
					pp=0;
					getmessages($("#idc").val());
							
					ad.play();
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error during process</div>");
				}
			
		});
});

$("#msgarea").keyup(function(event){
	
	if(event.which==13) $("#mychat").submit();
		
	
});

	 
});






function getprofiledata()
{
	$.get("apichat/api.php?query=3",function(res){
		var js=JSON.parse(res);
		
		$("#usr").val(js.username);
		$("#pwd").val("");
		$("#nm").val(js.name);
		$("#lm").val(js.lastname);
	
	});

}

function getmychat(id)

{
	
	$.get("apichat/api.php?query=10&idchat="+id,function(res){
		
		var js=JSON.parse(res);
		
		$("#chnm").val(js.rname);

	});
	
	
}

function deletemychat()
{
	x=$("#idchat").val();
	
$.get("apichat/api.php?query=12&idchat="+x,function(res){
	
		if(res=="true")
				{
					getmychatrooms();
					
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error during process</div>");
				}

	});
	
}

function approve()
{
	x=$("#idmember").val();
	$.get("apichat/api.php?query=14&idmember="+x,function(res){
		
		if(res=="true")
				{
					$("#message").html("<div class=\"alert alert-success msgd\">The member aproved</div>");
					$("#cc"+x).html("<span class='glyphicon glyphicon-ok' style='margin-left:15px;'></span>");
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error during process</div>");
				}
		
	});
	
}

function log()
{
	x=$("#idchat").val();
	$.get("apichat/api.php?query=15&idchat="+x,function(res){
		
		if(res=="true")
				{
					$("#message").html("<div class=\"alert alert-success msgd\">You are logged out</div>");
					 window.location.href='list.php';
				}
				else
				{
					$("#message").html("<div class=\"alert alert-danger msgd\">Error during process</div>");
				}
		
	});
	
}

function getlists()


{
	
	$.get("apichat/api.php?query=6",function(res){
		
		var js=JSON.parse(res);	
		var html1="";
			html1+="<table class='table table-hover tb1'>";
			html1+="<tr><th>Room id</th><th>Room name</th><th>Options</th></tr><tbody id=tt1>";
			
				for(i=0;i<js.length;i++)
					
					{
						html1+="<tr><td>"+js[i].rid+"</td><td>"+js[i].rname+"</td>";
						html1+="<td><a href='gettochat.php?idchat="+js[i].rid+"'><span class='glyphicon glyphicon-edit' style='margin-left:15px;';></span></a></td></tr>";
						
					}
			html1+="</tbody></table>";
			

			
			$(".chats").html(html1);
			
	});
}



function getmessages(id)

{	
	
	
	$.get("apichat/api.php?query=17&idchat="+id,function(res){
	
		var js=JSON.parse(res);

			var html2="";
			for(i=0;i<js.length;i++)
			{
				html2+="<div style='padding:10px; color:#0040ff;'>";
				html2+="<div style='font-size:15px;'><b style='color:black'>"+js[i].username+"</b>, wrote: <b> "+js[i].mstext+"</b></div>";
				html2+="<div style='font-size:10px;'><i>"+js[i].msdatetime+"</i></div>";
				html2+="</div>";
				
			}
			$("#mtext").html(html2);
			if(pp==0) $("#mtext").scrollTop ($("#mtext")[0].scrollHeight);
			pp=1;
				
		
	
});
}



function gettochat(id)
{
	var id2=id;
	$.get("apichat/api.php?query=7&idchat="+id,function(res){
		
		var js=JSON.parse(res);
		
			if(js.rowner=="noowner")
			{
				if(js.status=="false")
					{
						
						$("#dd1").html("<a href='signuptochat.php?idchat="+id2+"'><button style='margin-left:220px; margin-top:30px;'>Sign up to chat</button></a>");
						
					}
				if(js.status=="wait")
					{
						$("#dd1").html("<div class=\"alert alert-danger dangr\">Your request is sent to chatroom. Please wait!<br><a href='list.php'><button>Go to main page</button></a></div>");
					}
				if(js.status=="ok")
					{
						$("#dd1").html("<a href='chat.php?idchat="+id2+"'><button style='margin-left:150px;';>Chat</button></a>&nbsp;&nbsp;<button onclick='$(\"#idchat\").val("+id2+");$(\"#myModal\").modal(\"show\");'>log out from chat</button>");
					}
			}
			if(js.rowner=="owner")
			{
				$("#dd1").html("<a href='chat.php?idchat="+id2+"'><button style='margin-left:150px;';>Chat</button></a>&nbsp;&nbsp;<button onclick='$(\"#idchat\").val("+id2+");$(\"#myModal\").modal(\"show\");'>log out from chat</button>");
				
			}
		
	});
}

function getmychatrooms()
{
	$.get("apichat/api.php?query=9",function(res){
		
		var js=JSON.parse(res);	
		
		var html1="<input type=hidden id='idchat'>";
			html1+="<table class='table table-hover'>";
			html1+="<tr><th>Room id</th><th>Room name</th><th>Edit chat</th><th>Delete chat</th><th>Chat</th><th>List of members</th></tr>";
				for(i=0;i<js.length;i++)
					
					{
						html1+="<tr><td>"+js[i].rid+"</td><td>"+js[i].rname+"</td>";
						html1+="<td><a href='editmychat.php?idchat="+js[i].rid+"'><span class='glyphicon glyphicon-edit' style='margin-left:20px;';></span></a></td>";
						html1+="<td><a onclick='$(\"#idchat\").val("+js[i].rid+");$(\"#myModal\").modal(\"show\");'><span class='glyphicon glyphicon-trash'style='margin-left:20px;'></span></a></td>";
						html1+="<td><a href='chat.php?idchat="+js[i].rid+"'><span class='glyphicon glyphicon-comment' style='margin-left:5px;'></span></a></td>";
						html1+="<td><a href='seemembers.php?idchat="+js[i].rid+"'><span class='glyphicon glyphicon-user' style='margin-left:40px;'></span></a></td>";
						
					}
			html1+="</table>";
			$(".chats").html(html1);
			
	});
	
	
	
}

function getmembers(id)

{
	
	$.get("apichat/api.php?query=13&idchat="+id,function(res){
		
		var js=JSON.parse(res);	
		html1="";
		html1+="<table class='table table-hover'>";
			html1+="<tr><th>Username</th><th>Name</th><th>Lastname</th><th>Approve</th></tr>";
				for(i=0;i<js.length;i++)
					
					{
						html1+="<tr><td>"+js[i].username+"</td><td>"+js[i].name+"</td><td>"+js[i].lastname+"</td><td id=cc"+js[i].mid+">";
						if(js[i].mstatus==0) html1+="<a onclick='$(\"#idmember\").val("+js[i].mid+");$(\"#myModal\").modal(\"show\");'><span class='glyphicon glyphicon-edit' style='margin-left:15px;'></span>";
						if(js[i].mstatus==1) html1+="<span class='glyphicon glyphicon-ok' style='margin-left:15px;'></span>";
						
						html1+="</a></td></tr>";
					
					}
		
			html1+="</table>";
			$("#chats").html(html1);
	
	});
	
}


function setActive(a)
{
	
	 $("#a"+a).addClass("active"); 
	
}