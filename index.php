<?php
	include("Login.php");
	include("s_files/s_index_file/s_SignUp_file/SignUp.php");
?>
<html>
<head>
	<title> SOLARIS </title>
<?php	
include("s_files/s_index_file/s_background_file/index_background.php");
?>
        <LINK REL="SHORTCUT ICON" HREF="img/a.JPG" />
	<link href="s_files/s_index_file/s_css_file/index_css.css" rel="stylesheet" type="text/css">
    <link href="s_files/s_font/font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="s_files/s_index_file/s_js_file/Registration_validation.js"> </script>
</head>
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.s_join_time.value=time;
	}
</script>
<body>
	<!--login form-->
	<form  method="post">
		<div style="position:absolute; left:57.7%; top:2.2%; font-size:12px; color:#FFFFFF;">   Email </div> 
		<div style="position:absolute; left:57.7%; top:5.18%; font-size:11px; "> <input type="text" name="username" style="width:149.5;"/> </div>
		<div style="position:absolute;left:69.6%; top:2.2%; font-size:13px; color:#FFFFFF"> Password </div>
		<div style="position:absolute;left:69.6%; top:5.18%; font-size:13px; "> <input type="password" name="password" style="width:149.5;"> </div>
		<div style="position:absolute;left:69.6%; top:9.2%; font-size:12px; color:#CCCCCC;"> <a href="Forgot_Password.php" style="color:#CCCCCC; text-decoration:none;"> Forgot your password? </a> </div>   
		<div style="position:absolute;left:81.8%;top:5.2%; ">   <input type="submit" name="Login" value="Log In" id="login_button" />  </div>
	</form>
	
		<!-- solaris left part -->
	
		<!--Left part-->
		<!--Mobile Image--> 	
	<div style="position:absolute; right:5%; top:35%;"> <img src="img/c.jpg" width="620" height="335"> </div>
    <div style="position:absolute; right:7%; top:24%; color:#3B5998; font-size:28px;"> <font face="mysFont"> SOLARIS is a newly built social media </font> </div>
    <div style="position:absolute; right:7%; top:30%; color:#3B5998; font-size:28px;"> <font face="mysFont"> Log-in and chat with your favorite people. </font></div>
	
	
	
	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;right:78%; top:14.5%; color:#000066; font-size:25"> <h5> Sign Up </h5> </div>
		<div style="position:absolute;right:74%; top:24.6%; color:#000000;">  Don't wait to register.  </div>
		<div style="position:absolute;right:61.3%; top:29.1%; height:5; width:385; background-color:#0a060a;"> </div>
        
		<div style="position:absolute;right:85.4%; top:34%; font-size:16px; color:#000000">  First Name: </div>
		<div style="position:absolute;right:65.2%; top:32.8%; "> <input type="text" name="first_name" class="inputbox" maxlength="10"/> </div>
		<div style="position:absolute;right:85.4%; top:41%; font-size:16px; color:#000000">  Last Name: </div>
		<div style="position:absolute;right:65.2%; top:39.8%;  "> <input type="text" name="last_name"  size="25" class="inputbox" maxlength="10" /> </div>
		<div style="position:absolute;right:85.2%; top:48%; font-size:16px; color:#000000">  Email Address:  </div>
		<div style="position:absolute;right:65.2%; top:46.8%; "> <input type="text" name="email"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;right:85.4%; top:55%; font-size:16px; color:#000000">  Re-enter Email:  </div>  
		<div style="position:absolute;right:65.4%; top:53.8%; "> <input type="text" name="remail"  size="25" class="inputbox" /> </div>
		<div style="position:absolute;right:85.2%; top:62%; font-size:16px; color:#000000"> Password:  </div>
		<div style="position:absolute;right:65.2%; top:60.8%; "> <input type="password" name="password" size="25" class="inputbox" /> </div>
		<div style="position:absolute;right:87.2%; top:68.5%; font-size:16px; color:#000000"> I am:  </div>
		<div style="position:absolute;right:76.1% ;top:67.8%;">		  
		<select name="sex" style="width:120;height:35;font-size:18px;padding:3;">
			<option value="Select Sex:"> Select Sex: </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>
		
<div style="position:absolute;right:85.2%; top:74.8%; font-size:16px; color:#000000">  Birthday:  </div>

	<div style="position:absolute;left:15.5%; top:74%;">
	<select name="day" style="width:63;font-size:18px;height:32;padding:3;">
	<option value="Day:"> Day: </option>
	
	<script type="text/javascript">
	
		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
		
	</script>
	
	</select>
	</div>	


	<div style="position:absolute;left:21.5%; top:74%;">
	<select name="month" style="width:80;font-size:18px;height:32;padding:3;">
	<option value="Month:"> Month: </option>
	
	<script type="text/javascript">
	
		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}	
	</script>
	
	</select>
	</div>



	
	<div style='position:absolute;left:29.2%;top:74%;'>
	<select name="year" style="width:70; font-size:18px; height:32; padding:3;">
	<option value="Year:"> Year: </option>
	
	<script type="text/javascript">
	
		for(i=2050;i>=1930;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}
	
	</script>
	
	</select>
	</div>		
		<input type="hidden" name="join_time">
		<div style="position:absolute;right:72.2%; top:85%; ">  <input type="submit" name="signup" value="Sign Up" id="sign_button" / onClick="time_get()"> </div>
		</form>
		
		<div style="position:absolute;right:61.3%; top:95%; height:5; width:385; background-color:#0a060a; "> </div> 
        
		

		
<?php
	include("s_files/s_index_file/s_erorr_file/s_erorr.php");
?>					
</body>
</html>