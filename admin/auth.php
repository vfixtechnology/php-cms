<?php 

session_start();
if($_SESSION['ad_id']==''){
	header('location:login.php');
	}
        $ad_id =$_SESSION['ad_id'];
	$result = mysqli_query($con,"SELECT * FROM admin where ad_id='$ad_id'");
	 while ($row = mysqli_fetch_array($result)) { 
	      $user_role=$row['ad_id'];
		$user_email=$row['ad_email'];
		 $user_name=$row['ad_name'];
	 }
?>