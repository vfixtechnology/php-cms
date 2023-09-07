<?php
include 'conn.php';
include 'auth.php';

$a=11;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<?php include"title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
   <?php include"topbar.php"; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include"sidebar.php"; ?>
<?php
date_default_timezone_set('Asia/Kolkata');
$today = date("D d M Y");
$edit = 1;

 $resultt = mysqli_query($con,"SELECT * FROM about where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
$title1 = $_POST['title'];
$title = str_replace("'","\'", $title1);
$short1 = $_POST['short'];
$short = str_replace("'","\'", $short1);
$descrip1 = $_POST['descrip'];
$descrip = str_replace("'","\'", $descrip1);
$url = $_POST['url'];

if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}

$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "../images/about/".$lis_img;
if($edit==''){

move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"INSERT INTO about(title,descrip,img,date,status)VALUES('$title','$descrip','$lis_img','$today','0')");
echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'add-about.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE about SET title='$title',short='$short',descrip='$descrip',img='$lis_img',date='$today' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'add-about.php'</script>";
}


}

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add About</h1>
          </div>
           <div class="col-sm-6">
          
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            
			 
			<div class="card-header">
             <div class="form-group">
                  <label>Enter Title</label>
                 <input name="title" value="<?php echo $roww["title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
           	
			<div class="card-body pad">
			<label>Full Description</label>
              <div class="mb-3">
                <textarea name="descrip" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
              </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                    <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 560px x 350px</p>
                        <input name="lis_img" type="file">
                     <img style="width:200; height:150px;" src="../images/about/<?php echo $roww["img"]; ?>">
                  </div>
			</div>
			 
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<button type="submit" name="publise" class="btn btn-block btn-warning btn-lg">Publish</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
		  </form>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>
