<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=2;
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
        <?php include "sidebar.php"; ?>
        <?php
date_default_timezone_set('Asia/Kolkata');
$today = date("D d M Y");
//$edit = $_GET['edit'];

    $resultt = mysqli_query($con,"SELECT * FROM settings where id='1'");
    $roww = mysqli_fetch_array($resultt);
    $edit = $roww['id'];

if(isset($_POST['publise'])){
extract($_POST);	
//$title1 = $_POST['title'];
//$title = str_replace("'","\'", $title1);
//$category = $_POST['category'];
//$descrip1 = $_POST['descrip'];
//$descrip = str_replace("'","\'", $descrip1);
//$url = $_POST['url'];

/// header logo /// 
if($_FILES['header_logo']['name']!=''){
$header_logo = rand().$_FILES['header_logo']['name'];
}
else{
	$header_logo = $roww["header_logo"];
}
$tempname = $_FILES['header_logo']['tmp_name'];
$folder = "../images/logo/".$header_logo;

/// footer logo ///
if($_FILES['footer_logo']['name']!=''){
$footer_logo = rand().$_FILES['footer_logo']['name'];
}
else{
	$footer_logo = $roww["footer_logo"];
}
$tempname2 = $_FILES['footer_logo']['tmp_name'];
$folder2 = "../images/logo/".$footer_logo;
// footer logo end ///


if($edit==''){

move_uploaded_file($tempname, $folder);
move_uploaded_file($tempname2, $folder2);

$insertdata = mysqli_query($con,"INSERT INTO settings(site_name,phone,email,footer_desc,address,city,state,country,pin,header_logo,footer_logo,facebook,twitter,linkedin,instagram,youtube,map)VALUES('$site_name','$phone','$email','$footer_desc','$address','$city','$state','$country','$pin','$header_logo','$footer_logo','$facebook','$twitter','$linkedin','$instagram','$youtube','$map')");

echo "<script>alert('Posted Successfully');</script>
	<script>window.location.href = 'settings.php'</script>";
}
else{
move_uploaded_file($tempname, $folder);
move_uploaded_file($tempname2, $folder2);
$insertdata = mysqli_query($con,"UPDATE settings SET site_name='$site_name',phone='$phone',email='$email',footer_desc='$footer_desc',address='$address',city='$city',state='$state',country='$country',pin='$pin',header_logo='$header_logo',footer_logo='$footer_logo',facebook='$facebook',twitter='$twitter',linkedin='$linkedin',instagram='$instagram',youtube='$youtube',map='$map' where id=".$edit."");
echo "<script>alert('Updated Successfully');</script>
	<script>window.location.href = 'settings.php'</script>";
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
                            <h1>Settings</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">

                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Site Name</label>
                                        <input name="site_name" value="<?php echo $roww["site_name"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" value="<?php echo $roww["phone"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Company Email</label>
                                        <input name="email" value="<?php echo $roww["email"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Map</label>
                                        <textarea name="map" class="form-control" placeholder="Enter Iframe Code">
                    <?php echo $roww["map"]; ?>
                </textarea>
                                    </div>
                                </div>

                                <!--<div class="card-body pad">
			<label>Footer Description</label>
              <div class="mb-3">
                <textarea name="footer_desc" class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["footer_desc"]; ?></textarea>
              </div>
            </div>-->
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Full Address with pincode</label>
                                        <input name="address" value="<?php echo $roww["address"]; ?>" type="text"
                                            class="form-control" placeholder="Enter ...">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.col-->

                        <div class="col-md-6">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input name="facebook" value="<?php echo $roww["facebook"]; ?>" type="text"
                                            class="form-control" placeholder="URL">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input name="twitter" value="<?php echo $roww["twitter"]; ?>" type="text"
                                            class="form-control" placeholder="URL">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Linkedin</label>
                                        <input name="linkedin" value="<?php echo $roww["linkedin"]; ?>" type="text"
                                            class="form-control" placeholder="URL">
                                    </div>
                                </div>

                                <div class="card-header">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input name="instagram" value="<?php echo $roww["instagram"]; ?>" type="text"
                                            class="form-control" placeholder="URL">
                                    </div>
                                </div>
                                <div class="card-header">
                                    <div class="form-group">
                                        <label>YouTube</label>
                                        <input name="youtube" value="<?php echo $roww["youtube"]; ?>" type="text"
                                            class="form-control" placeholder="URL">
                                    </div>
                                </div>


                            </div>

                        </div>

                        <div class="col-md-12">

                            <div class="card-header">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- text input -->
                                            <div class="form-group">
                                                <center><button type="submit" name="publise"
                                                        class="btn btn-warning btn-lg">Publish</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
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
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
</body>

</html>