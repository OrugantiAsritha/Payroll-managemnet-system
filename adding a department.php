<?php
session_start();
?>
<?php require_once "pdo.php"; ?>
<?php require_once "bootstrap.php"; ?>

<?php
if ( isset($_SESSION['error']) ) {
    echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
    unset($_SESSION['error']);
}
?>

<?php
if (isset($_POST["D_name"])) {

        if (strlen($_POST['D_name']) < 1) {
            $_SESSION["error"] = 'Department_Name is required';
        header("Location: adding a department.php");
        return;
        }

    
    
            $stmt = $pdo->prepare('INSERT INTO department (D_name) VALUES ( :dn)');
    $stmt->execute(array(
        ':dn' => $_POST['D_name']
       )
    );
    $_SESSION["success"] = "Deatails entered successfully";
    header("Location: welcomepage.php");
    return;
        } 

?>

<!DOCTYPE html>
<html>
<head>
	<title> Adding New Employee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body bgcolor="aqua"  background="purple" align="middle";>
	<div class="New Employee">
		<h1>Welcome Admin</h1>
		<h2>Department Details</h2>
	</div>

		<form method="post">
       
        <p>Department_Name:
            <input type="text" name="D_name"/></p>
        <input type="submit" name="Submit" value="Submit">
        <a href="welcomepage.php">Cancle</a>
    </form>
</body>
</html>