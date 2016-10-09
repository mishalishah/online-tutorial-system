<?php
session_start();

$myusername = (isset($_POST['username']) ? $_POST['username'] : '');
if($myusername == 'admin')  {

	header("location:faculty_upload.php");

}
?>

<head>

<?php
include("includes/head.inc.php");
$host="localhost:3306";
$username="root";
$password="Heeva066";
$db_name="test";
$tbl_name="student";

$db = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect");

$myusername = (isset($_POST['username']) ? $_POST['username'] : '');

?>
<style>
.floating-box {
    float: right;
    width: 100px;
    height: 10px;
    margin: 20px;

}
h2{
    color: white;
}
</style>
</head>
<body>
<div id="header-wrapper">
	<div id="header">



            <div class="floating-box">

            <?php
            echo "<h2>$myusername</h2>";
            ?>
            </div>

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



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<body>
<a href="download.php">Download All Uploaded File</a>
</body>
</html>
