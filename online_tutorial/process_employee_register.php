<?php

		$link = mysqli_connect("localhost","root","Heeva066","test") or die("can not connect");
		//mysql_select_db(,$link) or die("can not select database");


		$nm=$_POST['nm'];
		$username=$_POST['username'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$addr=$_POST['addr'];
		$ph=$_POST['ph'];
		$pwd=$_POST['pwd'];
		$grade=$_POST['grade'];
		$course = implode(',', $_POST['course']);

		if($nm !=''||$email !=''){
			//echo "<br/><br/><span>Data Inserted successfully...!!</span>";
			mysqli_query($link,"insert into student(Name,Username,Password,Gender,Email,Address,Phone,Course) values ('$nm','$username','$pwd','$gender','$email','$addr','$ph','" . $course . "')");
			header("location:index.php");
			}
		else{
		echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
		}

mysqli_close($link);

?>