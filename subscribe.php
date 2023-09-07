<?php

ob_start();


    include "admin/conn.php";

    //fetch settings
  $setting = mysqli_query($con,"SELECT * FROM settings where id='1'");
	$setting_f = mysqli_fetch_array($setting);



// news letters script


$to = $setting_f['email']; // Your Brand Mail ID
$from = $_POST["email"]; // Replace it with your From Mail ID

$headers = "From: " . $from . "rn";

$subject = "New subscription";
$body = "New user subscription: " . $_POST['email'];
if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
{
if (mail($to, $subject, $body, $headers, "-f " . $from))
{
echo 'Your e-mail (' . $_POST['email'] . ') has been added to our mailing list!';
echo  header("Location: thanks2.php");
}
else
{
echo 'There was a problem with your e-mail (' . $_POST['email'] . ')';
}
}

ob_end_flush();
?>