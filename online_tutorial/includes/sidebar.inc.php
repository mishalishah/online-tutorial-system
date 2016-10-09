<?php
$host="localhost:3306";
$username="root";
$password="Heeva066";
$db_name="test";
$tbl_name="student";

$db = mysqli_connect("$host", "$username", "$password","$db_name") or die("cannot connect");
//mysqli_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername = (isset($_POST['username']) ? $_POST['username'] : '');
$mypassword = (isset($_POST['password']) ? $_POST['password'] : '');
//$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
//$myusername = stripslashes($myusername);
//$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($db,$myusername);
$mypassword = mysqli_real_escape_string($db,$mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db,$sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['username']= "$myusername";
//session_register("mypassword");
header("location:login_success.php");
}
elseif($myusername == 'admin' && $mypassword == 'admin')  {

	header("location:faculty_upload.php");

}
else {
//echo "Wrong Username or Password";
}
?>
<html>
<body>
<ul>
<li>
	<form action="login_success.php" method=POST>
	<b>Username:</b><br> <input type="text" name="username" >
	<br>
	<br>
	<b>Password:</b><br><input type="password" name="password">
	<br>
	<br>
	<b>TYPE:<br><br><select name="cat">
			<option> Student
			<option> Faculty
			</select>
	<br>
	<br>
	<b><input type="submit" value="login"></br></br></br></br></br></br></br></br></br></br>
	</form>

</li>
</ul>
</html>
</body>