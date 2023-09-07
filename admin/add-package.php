<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=4;
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
$edit = $_GET['edit'];
$copy = $_GET['copy'];
if($copy==''){
    $resultt = mysqli_query($con,"SELECT * FROM package where id=".$edit."");
}
else{
    $resultt = mysqli_query($con,"SELECT * FROM package where id=".$copy."");
}
 
 $roww = mysqli_fetch_array($resultt);
$location = mysqli_query($con,"SELECT * FROM location");


if(isset($_POST['add'])){
	
$name1 = $_POST['name'];
$name = str_replace("'","\'", $name1); 
$type = $_POST['type'];
$location = $_POST['location'];
$price = $_POST['price'];
$day = $_POST['day'];
$Itinerary1 = $_POST['Itinerary'];
$Itinerary = str_replace("'","\'", $Itinerary1); 
$Inclusions1 = $_POST['Inclusions'];
$Inclusions = str_replace("'","\'", $Inclusions1); 
$NOTE1 = $_POST['NOTE'];
$NOTE = str_replace("'","\'", $NOTE1); 




if($_FILES['lis_img']['name']!=''){
$lis_img = rand().$_FILES['lis_img']['name'];
}
else{
	$lis_img = $roww["img"];
}

$tempname = $_FILES['lis_img']['tmp_name'];

$folder = "images/package/".$lis_img;
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
$insertdata = mysqli_query($con,"INSERT INTO package(name,type,location,price,day,img,Itinerary,Inclusions,NOTE,status)VALUES('$name','$type','$location','$price','$day','$lis_img','$Itinerary','$Inclusions','$NOTE','0')");
echo "<script>alert('Added Successfully');</script>
	<script>window.location.href = 'add-package.php'</script>";
}
elseif($copy!=''){
$insertdata = mysqli_query($con,"INSERT INTO package(name,type,location,price,day,img,Itinerary,Inclusions,NOTE,status)VALUES('$name','$type','$location','$price','$day','$lis_img','$Itinerary','$Inclusions','$NOTE','0')");
echo "<script>alert('Added Successfully');</script>
	<script>window.location.href = 'add-package.php'</script>";
}
else{
$insertdata = mysqli_query($con,"UPDATE package SET name='$name',type='$type',location='$location',price='$price',day='$day',img='$lis_img',Itinerary='$Itinerary',Inclusions='$Inclusions',NOTE='$NOTE',status='$status' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'add-package.php'</script>";
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
            <h1>Add New Package</h1>
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
                  <label>Package Type</label>
                  <select name="type" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                    <option value="select">Select</option>
					 <option <?php if($roww["type"]=='DOMESTIC'){echo 'selected';} ?> value="DOMESTIC">DOMESTIC</option>
                    <option <?php if($roww["type"]=='INTERNATIONAL'){echo 'selected';} ?> value="INTERNATIONAL">INTERNATIONAL </option>
                   <option <?php if($roww["type"]=='CORPORATE'){echo 'selected';} ?> value="CORPORATE">CORPORATE</option>
                   <option <?php if($roww["type"]=='WEEKEND'){echo 'selected';} ?> value="WEEKEND">WEEKEND</option>
                  </select>
                </div>
            </div>
			 <div class="card-header">
             <div class="form-group">
                  <label>Select Location</label>
                  <select name="location" class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true">
                     <option>Select</option>
					<?php  
		while ($location_ft = mysqli_fetch_array($location)) { 
		?>
					<option <?php if($roww["location"]==$location_ft["name"]){echo 'selected';} ?> value="<?php echo $location_ft["name"]; ?>"><?php echo $location_ft["name"]; ?></option>
        <?php
		}
		?>
		
                  </select>
                </div>
            </div>
			<div class="card-header">
             <div class="form-group">
                  <label>Package Name</label>
                 <input name="name" type="text" value="<?php echo $roww["name"]; ?>" class="form-control" placeholder="Enter ...">
                </div>
            </div>
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Price with(symbol)</label>
                        <input name="price" type="text" value="<?php echo $roww["price"]; ?>" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Enter Days</label>
                        <input name="day" type="text" value="<?php echo $roww["day"]; ?>" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                </div>
            </div>
			<div class="card-header">
			<div class="form-group">
                   <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
					<p style="color:red;">img size 800px x 800px</p>
                    <div class="input-group">
                     
                        <input name="lis_img" type="file">
                       
                      
                     <?php echo $roww["img"]; ?>
                    </div>
                  </div>
			</div>
            <div class="card-body pad">
			<label>Enter Inclusions</label>
              <div class="mb-3">
                <textarea name="Itinerary" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["Itinerary"]; ?></textarea>
              </div>
            </div>
			
			
			<div class="card-header">
             <div class="form-group">
					<div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
				<button name="add" type="submit" class="btn btn-primary btn-lg">Add</button>
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
