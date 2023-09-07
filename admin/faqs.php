<?php
error_reporting(0);
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
if(isset($_GET['delete_id']))
{
 $query_delete="DELETE FROM faqs WHERE id='".$_GET['delete_id']."'";
 $p = mysqli_query($con, $query_delete);
 echo "<script>alert('Deleted Successfully');</script>
	<script>window.location.href = 'faqs.php'</script>";
}

$edit = $_GET['edit'];

 $resultt = mysqli_query($con,"SELECT * FROM faqs where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);
$location = mysqli_query($con,"SELECT * FROM faqs ORDER BY id DESC");


if(isset($_POST['add'])){
	
$name = $_POST['title'];
$desc = $_POST['descc'];

if($edit==''){

$insertdata = mysqli_query($con,"INSERT INTO faqs(title,descc,status)VALUES('$name','$desc','0')");
echo "<script>alert('Added Successfully');</script>
	<script>window.location.href = 'faqs.php'</script>";
}
else{

$insertdata = mysqli_query($con,"UPDATE faqs SET title='$name',descc='$desc' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'faqs.php'</script>";
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
            <h1>Add New FAQ</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-5">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
           
			
			<div class="card-header">
             <div class="form-group">
                  <label>Enter Title</label>
                 <input type="text" name="title" value="<?php echo $roww["title"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
            </div>
            <div class="card-header">
             <div class="form-group">
                  <label>Enter Desc..</label>
                 
                <textarea name="descc" class="form-control" placeholder="Enter ..." onfocus="clearContents(this);"><?php echo $roww["descc"]; ?></textarea>
                </div>
            </div>
			<button type="submit" name="add" class="btn btn-block btn-primary btn-lg">Add</button>
			
          </div>
		   </form>
        </div>
		<div class="col-md-7">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            <div class="card-header">
             <div class="form-group">
                  <label>All FAQS</label>
                 
                </div>
            </div>
			
			<div class="card-header">
             <table class="table">
                <thead>
                  <tr>
                    <th>Titles</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
		<?php  
		while ($location_ft = mysqli_fetch_array($location)) { 
		?>
				  <tr>
					
                    <td><?php echo $location_ft["title"]; ?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
						<a href="faqs.php?edit=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')"class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="faqs.php?delete_id=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                </tr>
		<?php
		}
		?>
				</tbody>
              </table>
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
