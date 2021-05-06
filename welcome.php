
<!DOCTYPE html>
<?php require_once "pdo.php"; ?>
<?php require_once "bootstrap.php"; ?>
<?php
session_start();
?>
<html>
<head>
	<title> WELCOME </title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body bgcolor="aqua"  background="light blue";>
	<p align = "middle">
	<font size="7" face="Arial Black"  text="red">  WELCOME<br/> <heigh> </font>
	<font size="5" text="Black"> My Employee Manager <br/> </font>
	<font size="5" text="Black"> Administer login <br/> </font>

<!--<form method="post" action="login.php" width="50%" align="middle">
	
	<div>
		<button type ="submit" name="login" class="btn"  > Login</button>
	</div> -->
	<?php


if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
if ( isset($_SESSION['success']) ) {
    echo '<p style="color:green">'.$_SESSION['success']."</p>\n";
    unset($_SESSION['success']);
}
?>
	<p>
		Already a member?<a href ="login
		.php">Sign in</a>
	</p>
	<p>
		Not yet a member?<a href ="register
		.php">Sign up</a>
	</p>
</body>

</html>


