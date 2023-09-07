<?php
include('conn.php');
if(isset($_POST['submit'])){
    $from = 'forgot@wiseutilities.com';
    $subject 	= 'Forgot Password';
	extract($_POST);
	$to = $ad_email;
	$check=mysqli_query($con,"select * from admin where ad_email='$ad_email'");
	$check_fetch=mysqli_fetch_array($check);
	
	if($check_fetch['ad_id']!=''){
	    $id = $check_fetch['ad_id'];
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$to."\r\n" .
            'X-Mailer: PHP/' . phpversion();
         
        $message = 'https://'.$_SERVER['HTTP_HOST'].'/admin/password-reset.php?m='.$id.'';
        	mail($to, $subject, $message, $headers);
            //echo 'Your mail has been sent successfully.';
        	 echo "Please Verify Your email and change password";
        } else{
            echo 'Unable to send email. Please try again.';
        }

	} 

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>Forgot </b>Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Enter Admin Email</p>

      <form method="post">
        <div class="input-group mb-3">
          <input type="email" name="ad_email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
             <a href="login.php">Sign In</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Forgot</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
