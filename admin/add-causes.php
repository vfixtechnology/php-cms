<?php
include 'conn.php';
include 'auth.php';

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php include"title.php"; ?></title>
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
$edit = $_GET['edit'];

 $resultt = mysqli_query($con,"SELECT * FROM causes where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);

if(isset($_POST['publise'])){
	
$title1 = $_POST['title'];
$title = str_replace("'","\'", $title1);
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

$folder = "../images/causes/".$lis_img;
if($edit==''){

move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"INSERT INTO causes(title,descrip,img,url,status)VALUES('$title','$descrip','$lis_img','$url','0')");
echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'add-causes.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE causes SET title='$title',descrip='$descrip',img='$lis_img',url='$url' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'add-causes.php'</script>";
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
            <h1>Add Causes</h1>
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
                  <label>Enter Causes Title</label>
                 <input name="title" value="<?php echo $roww["title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                </div>
            </div>
			
			

			
			<div class="card-body pad">
			<label>Enter Description</label>
              <div class="mb-3">
                <textarea name="descrip" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
              </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                    <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 800px x 800px</p>
                        <input name="lis_img" type="file">
                     <?php echo $roww["img"]; ?>
                  </div>
                <h3>OR</h3>
			</div>
			 
				<div class="card-header">
             <div class="form-group">
                  <label>Youtube Video ID Only</label>
                  <p style="color:red;">Paste only video id</p>
                 <input name="url" value="<?php echo $roww["url"]; ?>" type="text" class="form-control" placeholder="Paste Here">
                </div>
            </div>
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<button type="submit" name="publise" class="btn btn-block btn-warning btn-lg">Post</button>
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
