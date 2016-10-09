<?php
//session_start();
//include("includes/db.php");
include("includes/head.inc.php");

?>

<div id="header-wrapper">
	<div id="header">


            <div class="floating-box">

            <?php
            include("includes/main.inc.php");
            ?>

            </div>
            </div>



            </div>
</div>
<div id="logo"><br><br><br>
	<?php
	include("includes/logo.inc.php");
	?>
	</div>


<?php
$host="localhost:3306";
$username="root";
$password="Heeva066";
$db_name="test";
$tbl_name="file";

$db = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect");
	if(isset($_FILES['UploadFileField'])){
		// Creates the Variables needed to upload the file
		$UploadName = $_FILES['UploadFileField']['name'];
		$UploadName = $UploadName;
		$UploadTmp = $_FILES['UploadFileField']['tmp_name'];
		$UploadType = $_FILES['UploadFileField']['type'];
		$FileSize = $_FILES['UploadFileField']['size'];


		// Removes Unwanted Spaces and characters from the files names of the files being uploaded
		$UploadName = preg_replace("#[^a-z0-9.]#i", "", $UploadName);
		// Upload File Size Limit
		if(($FileSize > 925000)){

			die("Error - File too Big");

		}


		// Checks a File has been Selected and Uploads them into a Directory on your Server
		else{

			move_uploaded_file($UploadTmp, "uploads/$UploadName");

                        echo "You have uploaded". "  " .$UploadName. "  ". "successfully";
                        //$UploadName.html(response);

		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
body { margin:0; padding:0; background-color:#CCC; }
.fileuploadholder {
        align:left;
	width:300px;
	height:20px;
	margin: 60px auto;
	background-color:#FFF;
	border:0px solid #CCC;
	padding:6px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>File Upload</title>
</head>

<body>

<div class="fileuploadholder">
    <form action="faculty_upload.php" method="post" enctype="multipart/form-data" name="FileUploadForm" id="FileUploadForm">
    <label for="UploadFileField"></label>
    <input type="file" name="UploadFileField" id="UploadFileField" />
    <input type="submit" name="UploadButton" id="UploadButton" value="Upload" />
  </form>
</div>
</body>
</html>

