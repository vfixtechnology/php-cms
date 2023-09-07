<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=3;
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
	$del = $_GET['delete_id'];
	$selectdelete = mysqli_query($con,"SELECT * FROM location where id=".$del."");
	$selectimg = mysqli_fetch_array($selectdelete);
	$path = 'images/location/';
	$now_delete = unlink($path.$selectimg['img']);
	if($now_delete){
	$query_delete="DELETE FROM location WHERE id='".$_GET['delete_id']."'";
	$p = mysqli_query($con, $query_delete);
	echo "<script>alert('Deleted Successfully');</script>
	<script>window.location.href = 'add-location.php'</script>";
	}
}

$edit = $_GET['edit'];

 $resultt = mysqli_query($con,"SELECT * FROM location where id=".$edit."");
 $roww = mysqli_fetch_array($resultt);
$location = mysqli_query($con,"SELECT * FROM location ORDER BY id DESC");


if(isset($_POST['add'])){
	
$name = $_POST['name'];
$type = $_POST['type'];

if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}
$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "images/location/".$lis_img;
$valid_ext = array('png','jpeg','jpg');
// file extension
$file_extension = pathinfo($folder, PATHINFO_EXTENSION);
$file_extension = strtolower($file_extension);
// Check extension
if(in_array($file_extension,$valid_ext)){
// Compress Image
compressImage($tempname,$folder,60);
}
if($edit==''){

//move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"INSERT INTO location(name,type,img)VALUES('$name','$type','$lis_img')");
echo "<script>alert('Added Successfully');</script>
	<script>window.location.href = 'add-location.php'</script>";
}
else{
//move_uploaded_file($tempname, $folder);

$insertdata = mysqli_query($con,"UPDATE location SET name='$name',type='$type',img='$lis_img' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'add-location.php'</script>";
}


}
// Compress image
function compressImage($source, $destination, $quality) {

  $info = getimagesize($source);

  if ($info['mime'] == 'image/jpeg') 
    $image = imagecreatefromjpeg($source);

  elseif ($info['mime'] == 'image/gif') 
    $image = imagecreatefromgif($source);

  elseif ($info['mime'] == 'image/png') 
    $image = imagecreatefrompng($source);

  imagejpeg($image, $destination, $quality);

}
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Item</h1>
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
                  <label>Item Type</label>
                  <select name="type" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option >Select</option>
					<option <?php if($roww['type']=='VEGETABLE'){ echo 'selected'; } ?> value="VEGETABLE">VEGETABLE</option>
					<option <?php if($roww['type']=='FRUIT'){ echo 'selected'; } ?> value="FRUIT">FRUIT </option>
                   
                  </select>
                </div>
            </div>
			
			<div class="card-header">
             <div class="form-group">
                  <label>Enter  Name</label>
                 <input type="text" name="name" value="<?php echo $roww["name"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
            </div>
			<div class="card-header">
                   <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 250px x 250px</p>
                        <input type="file" name="lis_img">
                     <?php echo $roww["img"]; ?>    
			</div>
			<div class="card-header">
			<button type="submit" name="add" class="btn btn-primary btn-block">Add</button>
			</div>
          </div>
		   </form>
        </div>
		<div class="col-md-7">
		<form action="" method="post" enctype="multipart/form-data">
          <div class="card card-outline card-info">
            <div class="card-header">
             <div class="form-group">
                  <label>All Location</label>
                 
                </div>
            </div>
			
			<div class="card-header">
             <table class="table">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Type</th>
					<th>Img</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
		<?php  
		while ($location_ft = mysqli_fetch_array($location)) { 
		?>
				  <tr>
					
                    <td><?php echo $location_ft["name"]; ?></td>
					<td><?php echo $location_ft["type"]; ?></td>
					<td><img style="width: 100px;" src="images/location/<?php echo $location_ft["img"]; ?>"></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
						<a href="add-location.php?edit=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')"class="btn btn-info"><i class="fas fa-edit"></i></a>
                        <a href="add-location.php?delete_id=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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
