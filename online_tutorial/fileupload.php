<?php
//session_start();
include("includes/db.php");
include("includes/head.inc.php");
?>
<div id="logo"><br><br><br>
	<?php
	include("includes/logo.inc.php");
	?>
	</div>


<?php

if(isset($_POST['submit'])){

    $doc_name=$_POST['doc_name'];

    $name=$_FILES['myfile']['name'];
    $tmp_name=$_FILES['myfile']['tmp_name'];

    if($name){

        $location="uploads/$name";
        move_uploaded_file($tmp_name, $location);
        $query=mysqli_query("insert into $tbl_name (name,path) values ('$doc_name','$location')");
        header('location:fileupload.php');

    }

 else {
    die("select file!!");
    }
}

?>

<html>
    <head>
        <title>Upload doc</title>
    </head>

    <body>
        <form action="fileupload.php" method="post" enctype="multipart/form-data">
            <lable for="name">Document name</lable>
            <input type="text" name="doc_name">
            <input type="file" name="myfile">
            <input type="submit" name="submit" value="upload">
        </form>
    </body>
</html>