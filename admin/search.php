<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=5;
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
<style>
.dataTables_length{
    display:none;
}
.table-striped tbody tr:nth-of-type(odd) {
    background-color: white !important;
}
</style>
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
	$del = $_GET['delete_id'];
	$selectdelete = mysqli_query($con,"SELECT * FROM package where id=".$del."");
	$selectimg = mysqli_fetch_array($selectdelete);
	$path = 'images/package/';
	$now_delete = unlink($path.$selectimg['img']);
	if($now_delete){
		$query_delete="DELETE FROM package WHERE id='".$_GET['delete_id']."'";
		$p = mysqli_query($con, $query_delete);
		echo "<script>alert('Deleted Successfully');</script>
		<script>window.location.href = 'view-package.php'</script>";
	}
}


$limit = 10;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$serial = ($page-1) * $limit; 

  
    $resultt = mysqli_query($con,"SELECT * FROM package ORDER BY id DESC LIMIT $serial, $limit");


?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Packages</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
        <!-- /.col-->
        <div class="col-md-12">
             <div class="card">
            <div class="card-body">
              <table id="more" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Package Name</th>
                    <th>Type</th>
					<th>Location</th>
                    <th>Price</th>
					<th>Days</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
			<?php  
			while ($roww = mysqli_fetch_array($resultt)) { 	
			?>  
				  <tr>
                    <td><?php echo $roww["name"]; ?></td>
                    <td><?php echo $roww["type"]; ?></td>
					<td><?php echo $roww["location"]; ?></td>
                    <td><?php echo $roww["price"]; ?></td>
					<td><?php echo $roww["day"]; ?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="add-package.php?copy=<?php echo $roww["id"]; ?>" data-toggle="tooltip" title="Duplicat" class="btn btn-info"><i class="fa fa-clone"></i></a>
						<a href="add-package.php?edit=<?php echo $roww["id"]; ?>" data-toggle="tooltip" title="Edit" onclick="return confirm('Are you sure?')" class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="view-package.php?delete_id=<?php echo $roww["id"]; ?>" data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                </tr>
			<?php 
			$serial++;
			} 
			?> 
				</tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
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

<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#more").DataTable();
  });
</script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
</body>
</html>
