<?php
	session_start();
	error_reporting(1);
	$user=$_SESSION['suser'];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sdb");
	$query1=mysqli_query($con,"select * from users where Email='$user'");
	$rec1=mysqli_fetch_array($query1);
	$userid=$rec1[0];
	mysqli_query($con,"update user_status set status='Offline' where user_id='$userid'");
	unset($_SESSION['suser']);
	//session_destroy();
	header("location:../../index.php");
?>