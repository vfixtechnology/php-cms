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
$view = $_GET['view'];

 $resultt = mysqli_query($con,"SELECT * FROM package where id=".$view."");
 $roww = mysqli_fetch_array($resultt);
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>View Single Package</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
             <div class="card-header">
             <div class="form-group">
                  <label>Location Type</label>
                  <p><?php echo $roww["type"]; ?><p>
                </div>
            </div>
			 <div class="card-header">
             <div class="form-group">
                  <label>Select Location</label>
                 <p><?php echo $roww["location"]; ?><p>
                </div>
            </div>
			<div class="card-header">
             <div class="form-group">
                  <label>Package Name</label>
                <p><?php echo $roww["name"]; ?><p>
                </div>
            </div>
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Price with(symbol)</label>
                        <p><?php echo $roww["price"]; ?><p>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Enter Days</label>
                       <p><?php echo $roww["day"]; ?><p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                    <label for="exampleInputFile">Select Img</label>
                   <img style="width:300px;" src="../images/package/<?php echo $roww["img"]; ?>">
                  </div>
			</div>
            <div class="card-body pad">
			<label>Enter Itinerary</label>
             <p><?php echo $roww["Itinerary"]; ?><p>
            </div>
			<div class="card-body pad">
			<label>Enter Inclusions</label>
              <p><?php echo $roww["Inclusions"]; ?><p>
            </div>
			<div class="card-body pad">
			<label>Enter NOTE</label>
             <p><?php echo $roww["NOTE"]; ?><p>
            </div>
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<a href="add-package.php?edit=<?php echo $roww["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-block btn-warning btn-lg">Edit</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

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
