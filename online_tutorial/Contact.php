<?php session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<?php
include("includes/head.inc.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
tab1 { padding-left: 5em; }
</style>

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

					<h2 class="title"><b>Contact Details</b></h2></br></br>

					<h2><div class="entry">
					Name : Mishali Shah</br></br>
					Contact Number: (519)-566-9147</br></br>
					Email Id: mishali.shah.94@gmail.com</br></br>
					Address :  401 Sunset Ave,</br>
						  <tab1>Windsor, ON N9B 3P4</tab1>
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
