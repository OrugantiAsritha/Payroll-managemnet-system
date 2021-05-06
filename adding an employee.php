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
if (isset($_POST["E_name"]) && isset($_POST["E_mail"]) && isset($_POST["E_mobile"])) {

        if (strlen($_POST['E_name']) < 1 || strlen($_POST['E_mail']) < 1 || strlen($_POST['E_mobile']) < 1) {
            $_SESSION["error"] = 'All fields are required';
        header("Location: adding an employee.php");
        return;
        }

    
    
            $stmt = $pdo->prepare('INSERT INTO employee (E_name, E_mail,E_mobile) VALUES ( :en, :em, :ep)');
    $stmt->execute(array(
        ':en' => $_POST['E_name'],
        ':em' => $_POST['E_mail'],
        ':ep' => $_POST['E_mobile'])
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
		<h2>Employee Details</h2>
	</div>
<!--	<form method="post">

	<div class="E_Name" align="middle">
		<label>Employee Name</label>
		<input type="text" name="E_name" placeholder="Enter Employee Name">
	</div>

	
	<div class="E_mobile" align="middle">
		<label>Mobile No</label>
		<input type="text" name="E_mobile" placeholder="Employee Mobile No.">
	</div>

	
	<div class="E_mail" align="middle">
		<label>Email ID</label>
		<input type="text" name="E_mail" placeholder="Employee Mail Id.">
	</div>

	<div class="no" align="middle">
		<button type="submit" name="submit" class="btn">Submit</button>
		<button type="submit" name="Cancel" class="btn">Cancel</button>
	</div>
	</form> -->
	<form method="post">
        <p>Username:
            <input type="text" name="E_name" size="60" placeholder="Enter Username" /></p>
        <p>Email:
            <input type="text" name="E_mail" placeholder="Enter Email" size="60"/></p>
        <p id="pass">Password:
            <input type="text" name="E_mobile"/></p>
        <input type="submit" name="Submit" value="Submit">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>