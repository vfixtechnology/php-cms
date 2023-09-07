<?php
include 'conn.php';
include 'auth.php';

$a=10;
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
$_GET['delete_id'];
if(isset($_GET['delete_id']))
{
 $query_delete="DELETE FROM images WHERE id='".$_GET['delete_id']."'";
 $p = mysqli_query($con, $query_delete);
 echo "<script>alert('Deleted Successfully');</script>
	<script>window.location.href = 'view-gallery.php'</script>";
}


$limit = 10;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$serial = ($page-1) * $limit; 

  
    $resultt = mysqli_query($con,"SELECT * FROM teams ORDER BY id DESC LIMIT $serial, $limit");


?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Gallery</h1>
          </div>
          <div class="col-sm-6" style="text-align:right;">
            <a class="btn btn-primary" href="add-gallery.php">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">View</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body p-0">
                <div class="row">
       
             <?php
// Include the database configuration file
include_once 'dbConfig.php';

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY id DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
        $iid = $row["id"];
?>
 <div class="col-md-3 pb-3" style="border:1px solid;">
    <img style="width: 100%;" src="<?php echo $imageURL; ?>" alt="" /><br>
    <center>
        <input type="text" value="<?= $actual_link;?>/admin/<?= $imageURL; ?>" id="myInput<?= $iid; ?>">
<button class="btn btn-success" onclick="myFunction<?= $iid; ?>()">Copy</button> 
        <a class="btn btn-danger" href="view-gallery.php?delete_id=<?= $row["id"]; ?>"><i class="fas fa-trash"></i> Delete</a></center>
        <script>
function myFunction<?= $iid; ?>() {
  var copyText = document.getElementById("myInput<?= $iid; ?>");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
}
</script>
    </div>
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php } ?> 
            </div>
			</div>
            <!-- /.card-body -->
          </div>
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

<!---  copy text  -->



</body>
</html>
