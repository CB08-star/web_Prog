<html>
<head>
	<script src="background_file/background_js/event.js"></script>
	<script src="background_file/background_js/searching.js"></script>
	<script src="background_file/background_js/searched_reco_event.js">
	</script>
	<script src="background_file/background_js/submited_searched_reco_event.js"></script>
    <link href="../s_font/font.css" rel="stylesheet" type="text/css">
    <LINK REL="SHORTCUT ICON" HREF="..../../../../img/a.JPG" />
</head>
<body>

<!--Head background-->
<div style="position:fixed;left:0;top:0; height:6%; width:100%; z-index:1; background:#091D26">   </div>
<!--Head s text-->
<div style="position:fixed;left:4.05%;top:0.8%;font-size:25;font-weight:900; z-index:2;"> <a href="Home.php" style="color:#FFFFFF; text-decoration:none;" onMouseOver="on_head_s_text()" onMouseOut="out_head_s_text()"> <font face="mysFont"> SOLARIS </font> </a> </div>
<!--Head s text background-->
<div style="position:fixed;left:4%;top:1%; height:5%; width:8%; z-index:1; background:#4A63A5; display:none;" id="head_s_text_backgraound">   </div>

<div style="position:fixed; left:12.7%; top:1.6%; z-index:1;"> <a href="Group_Message.php"> <img src="background_file/background_icons/messages.jpg"> </a> </div>

<script>
	function bcheck()
	{
		s=document.s_search.search1.value;
		
		if(s=="")
		{
			return false;
		}
		return true;
	}
</script>
<form name="s_search" action="Search_Display_submit.php" method="get" onSubmit="return bcheck()">
	<div style="position:fixed; left:19%; top:1.2%; z-index:1;"> <input type="text" name="search1" style="height:25; width:500;"  onKeyUp="searching();" id="search_text1" placeholder="Search for people" > </div>
	
	<div id="searching_ID"></div> 

	<div style="position:fixed; left:54.2%;top:1.6%; z-index:1;">
	<input type="submit" value=" " style="background-image:url(background_file/background_icons/search.png);">
	</div>
</form>


<?php
error_reporting(1);
		$user=$_SESSION['suser'];
		$con = mysqli_connect("localhost","root","");
		mysqli_select_db($con,"sdb");
		$query1=mysqli_query($con,"select * from users where Email='$user'");
		$rec1=mysqli_fetch_array($query1);
		$userid=$rec1[0];
		$query2=mysqli_query($con,"select * from user_profile_pic where user_id=$userid");
		$rec2=mysqli_fetch_array($query2);
		
		$name=$rec1[1];
		$gender=$rec1[4];
		$img=$rec2[2];
?>
	
<div style="position:fixed; left:71.8%; top:0.6%; z-index:1;">
	<table cellspacing="0">
	<tr id="hedarname2">
	
		<td style="padding-left:7;" id="head_img" onMouseOver="head_pro_pic_over()" onMouseOut="head_pro_pic_out()"> <a href="../s_profile/Profile.php">  <img src="../../s_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:27; width:25;"> </a> </td>
		
		<td id="head_name_bg" onMouseOver="head_pro_pic_over()" onMouseOut="head_pro_pic_out()"> <a href="../s_profile/Profile.php" id="head_name_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-transform:capitalize; text-decoration:none;"> &nbsp;  <?php echo $name; ?> &nbsp;</a> </td>
		<td style="color:#DEDEEF;"> | </td>
		<td id="head_home_bg" onMouseOver="head_home_over()" onMouseOut="head_home_out()"> <a href="Home.php" id="head_home_font" style="color:#DEDEEF; font-size:12; font-weight:900;font-family:lucida Bright; text-decoration:none;"> &nbsp; Home &nbsp; </a> </td>
        <td style="color:#DEDEEF;">|</td>
	</tr>
	</table>
</div>

<!--s option-->
<script src="background_file/background_js/options.js"></script>

        <div style="position:fixed; left:97%; top:0.4%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="open_option()"> </div>
        
<div style="display:none" id="option">

<div style="position:fixed; left:97%; top:0.4%; z-index:1;"> <img src="background_file/background_icons/nexusae0_home_settings_icon2.png" height="35" width="35" onClick="close_option()"> </div>

        <div style="position:fixed; left:85%; top:6%; z-index:3; background:#FFF; height:32%; width:14.8%; box-shadow:0px 2px 10px 1px rgb(0,0,0);"> </div>
        
         <div style="position:fixed; left:86%; top:8.5%; z-index:3;">
        <a href="../s_profile/Profile.php"> <img src="img/timeline.png" width="16" height="16" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()"></a>
        </div>
        
        <div> g</div>
        
        <div style="position:fixed; left:88%; top:5%; z-index:3;">
                 <a href="../s_profile/Profile.php" style="text-decoration:none; color:#000;" id="head_timeline" onMouseOver="head_timeline_over()" onMouseOut="head_timeline_out()" ><h4>Timeline</h4></a> 
        </div>
        <div style="position:fixed; left:86%; top:13.5%; z-index:3;">
             <a href="../s_profile/about.php"> <img src="img/about.png" onMouseOver="head_about_over()" onMouseOut="head_about_out()"> </a>
        </div> 
        
        
        <div style="position:fixed; left:88%; top:10%; z-index:3;">
                <a href="../s_profile/about.php" style="text-decoration:none; color:#000;" id="head_about" onMouseOver="head_about_over()" onMouseOut="head_about_out()"><h4>About</h4></a> 
        </div>
        
        <div style="position:fixed; left:85.8%; top:18%; z-index:3;"> <a href="../s_profile/photos.php"> <img src="img/photo&video.PNG" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:15%; z-index:3;"><a href="../s_profile/photos.php" style="text-decoration:none; color:#000;" id="head_photos" onMouseOver="head_photos_over()" onMouseOut="head_photos_out()"><h4>Photos</h4></a></div>

	<div style="position:fixed; left:85.8%; top:23%; z-index:3;"> <a href="Settings.php"> <img src="img/settings2.png" height="25" width="23" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"> </a> </div>
<div style="position:fixed; left:88.2%; top:20%; z-index:3;"><a href="Settings.php" style="text-decoration:none; color:#000;" id="head_settings" onMouseOver="head_settings_over()" onMouseOut="head_settings_out()"><h4> Account Settings </h4></a></div>

<div style="position:fixed; left:86.1%; top:27.5%; z-index:3;"> <a href="feedback.php"> <img src="background_file/background_icons/icon-feedback.png" height="20" width="20" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:24.5%; z-index:3;"><a href="feedback.php" style="text-decoration:none; color:#000;" id="head_feedback" onMouseOver="head_feedback_over()" onMouseOut="head_feedback_out()"><h4> Feedback </h4></a></div>

<div style="position:fixed; left:86%; top:32.5%; z-index:3;"> <a href="../s_logout/logout.php"> <img src="background_file/background_icons/logout.png" height="20" width="20"  onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"> </a> </div>
<div style="position:fixed; left:88.3%; top:29.1%; z-index:3;"><a href="../s_logout/logout.php" style="text-decoration:none; color:#000;" id="head_logout" onMouseOver="head_logout_over()" onMouseOut="head_logout_out()"><h4> Logout </h4></a></div>
</div>
               
		
<!--left part-->
<div style="position:fixed; left:1.2%; top:10%; z-index:1;">
	<table border="0">
	<tr>
		<td> <a href="../s_profile/Profile.php"> <img src="../../s_users/<?php echo $gender; ?>/<?php echo $user; ?>/Profile/<?php echo $img; ?>" style="height:100; width:100;"> </a> </td>
		<td> &nbsp; <a href="../s_profile/Profile.php" onMouseOver="left_name_over()" onMouseOut="left_name_out()" style="color:#000000; font-size:13; font-weight:900;font-family:Georgia; text-transform:capitalize; text-decoration:none;" id="left_name">   <?php echo $name; ?> </a> </td>
	</tr>
	</table>
</div>


<!--left hr-->
<hr style="position:fixed;left:18%;top:4.8%;height:100%;width:0; border-color:#CCCCCC; box-shadow:-5px 0px 5px 0px rgb(0,0,0);">
<!--right hr-->
<hr style="position:fixed;left:82%;top:4.8%;height:100%;width:0; border-color:#CCCCCC; box-shadow:5px 0px 5px 0px rgb(0,0,0);">


<!--Online-->
<script>
		function up_online()
		{
		 	document.getElementById("online_bg").style.display='block';
			document.getElementById("down_onlne").style.display='block';
			document.getElementById("down_onlne_img").style.display='block';
			document.getElementById("up_online").style.display='none';
			document.getElementById("up_online_img").style.display='none';
		}
		function down_online()
		{
		 	document.getElementById("online_bg").style.display='none';
			document.getElementById("down_onlne").style.display='none';
			document.getElementById("down_onlne_img").style.display='none';
			document.getElementById("up_online").style.display='block';
			document.getElementById("up_online_img").style.display='block';
		}
</script>
<div style="display:none;" id="online_bg">
<div style="position:fixed; left:84%; top:6%; background-color:#000000; opacity:0.5; height:89.2%; width:16%;"></div>

<?php
	 $query_online=mysqli_query($con,"select * from user_status where status='Online'");
	 $online_count=mysqli_num_rows($query_online);
	 $online_count=$online_count-1;
	 
	 if($online_count==0)
	 {
?>
		<div style="position:fixed; left:89%; top:8%; color:#FFF;"> Not found </div>
<?php
     }
?>
	<div style="position:fixed; left:84.5%; top:6%;">
	<table>
<?php			
	 
	 
	 while($online_data=mysqli_fetch_array($query_online))
	 {
	  	$online_user_id=$online_data[0];
		$query_online_user_data=mysqli_query($con,"select * from users where user_id=$online_user_id");
		$query_online_user_pic=mysqli_query($con,"select * from user_profile_pic where user_id=$online_user_id");
		$fetch_online_user_info=mysqli_fetch_array($query_online_user_data);
		$fetch_online_user_pic=mysqli_fetch_array($query_online_user_pic);
		$online_user_name=$fetch_online_user_info[1];
		$online_user_Email=$fetch_online_user_info[2];
		$online_user_gender=$fetch_online_user_info[4];
		$online_user_pic=$fetch_online_user_pic[2];


		

  	
	 if($user!=$online_user_Email)
     {
?>
			 <tr>
			   	   <td> <a href="../s_view_profile/view_profile.php?id=<?php echo $online_user_id; ?>"> <img src="../../s_users/<?php echo $online_user_gender; ?>/<?php echo $online_user_Email; ?>/Profile/<?php echo $online_user_pic; ?>" height="30" width="30"> </a> </td>
				   <td style="color:#ffffff;"> <a href="../s_view_profile/view_profile.php?id=<?php echo $online_user_id; ?>" style="text-transform:capitalize; text-decoration:none; color:#ffffff;"> <?php echo $online_user_name; ?> </a> &nbsp; </td>	
				   <td><img src="background_file/background_icons/online_symbol.png"  /></td>   
			 </tr>
 <?php	            
	  }
	}
?>
</table>
</div>
</div>



<div style="position:fixed; left:84%; top:95.2%;" id="up_online"> <input type="button" style=" height:30; width:216; border:groove;" value="Online(<?php echo $online_count; ?>)" onClick="up_online()"/>  </div>
<div style="position:fixed; left:84%; top:95.2%; display:none;" id="down_onlne"> <input type="button" style=" height:30; width:216; border: groove;" value="Online(<?php echo $online_count; ?>)" onClick="down_online()" />  </div>
<div style="position:fixed; left:88%; top:95.7%;" id="up_online_img"> <img src="background_file/background_icons/online.png" onClick="up_online()" /></div>
<div style="position:fixed; left:88%; top:95.7%; display:none;"id="down_onlne_img"> <img src="background_file/background_icons/online.png" onClick="down_online()" /></div>

</body>
</html>
