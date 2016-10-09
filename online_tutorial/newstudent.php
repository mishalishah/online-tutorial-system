<?php session_start();
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>
</head>
<body>
<div id="header-wrapper">
	<div id="header">
	<div id="menu">
		<?php
		include("includes/menu.inc.php");
		?>
		</div>
		<!-- end #menu -->
		<div id="search">
		<?php
		
//		include("includes/search.inc.php");
		?>
		</div>
		<!-- end #search -->
	</div>
</div>
<!-- end #header -->
<!-- end #header-wrapper -->
<div id="logo">
	<?php
	include("includes/logo.inc.php");
	?>
	</div>
<div id="wrapper">
	<div id="page">
		<div id="page-bgtop">
			<hr />
			<!-- end #logo -->
			<div id="content">
				<div class="post">
					
					<h2 class="title"><b>REGISTER</b></a></h2>
					<p class="meta">Please fill up the form</p>
					<div class="entry">
						<h2><form action="process_employee_register.php" method="post" enctype="multipart/form-data">
							Full Name: <BR> <input type="text" name="nm" style="width:200px;">
							<br><br>Username:<BR><input type="text" name="username">
							<br><br>Password:<BR><input type="password" name="pwd">
							<BR><BR>Gender:<BR> <INPUT TYPE = "RADIO" VALUE="MALE" name="gender">MALE<INPUT TYPE = "RADIO" VALUE="female"name="gender">FEMALE
							<br><BR> Email:<BR> <INPUT TYPE = "TEXT" name="email" style="width:200px;">
							<BR><BR> Address: <BR><TEXTAREA name="addr" style="width:200px;"></TEXTAREA>
							<BR><BR> Phone number:<BR> <INPUT TYPE = "TEXT" name="ph" style="width:200px;">
							
							<BR><BR> Course: <BR><input type="checkbox" name="course" value="Database">Database
									<input type="checkbox" name="course[]" value="Networking">Networking
									<input type="checkbox" name="course[]" value="Python">Python
									<input type="checkbox" name="course[]" value="System Programming">System Programming
							<center><br><br> <input type="submit" value="submit"></center>					
						</form>
						</h2>
					</div>
				</div>
				
			</div>
			<!-- end #content -->
			<div id="sidebar">
			<?php
		include("includes/sidebar.inc.php");
		?>	
			</div>
			<!-- end #sidebar -->
			<div style="clear: both;">&nbsp;</div>
		</div>
	</div>
</div>
<!-- end #page -->
<div id="footer-bgcontent">
	<div id="footer">
		<?php
		include("includes/footer.inc.php");
		?>	
	</div>
</div>
<!-- end #footer -->
</body>
</html>
