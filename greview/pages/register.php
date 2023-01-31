<!DOCTYPE html>
<html lang="eng">

<head>
	<title>Register - G-Review</title>
	<meta charset="UTF 8">
	<link rel="stylesheet" href="../css/reset.css" type="text/css" />
	<link rel="stylesheet" href="../css/register.css" type="text/css" />

<?php
#Make connection to database, check whether the user is logged in or not
session_start();
if(isset ($_SESSION["login"])){
    include('../includes/headeruser.html');
	header('Location: ../index.php');
}else{
	include('../includes/header.html');
}

function login_check()
{
	#Check whether the user has fill the username, password, and confirm password field or not
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		require('../includes/mysqli_connect.php');
		$errors = array();
		if (empty($_POST['username'])) {
			$errors[] = "You forgot enter username.";
		} else {
			$username = mysqli_real_escape_string($dbc, trim($_POST['username']));
		}
		if (empty($_POST['password'])) {
			$errors[] = "You forgot enter password.";
		} else {
			$password = mysqli_real_escape_string($dbc, trim($_POST['password']));
		}
		if (empty($_POST['confirm_password'])) {
			$errors[] = "You forgot confirm password.";
		} else if ($_POST['password'] == $_POST['confirm_password']) {
			#Check whether the username entered already exists or not
			if (empty($errors)) {
				$sql = "SELECT * FROM user WHERE username='" . $username . "' LIMIT 1";

				$result = mysqli_query($dbc, $sql);
				#If username has already exists, error prompt will apear
				if (mysqli_num_rows($result) == 1) {
					$errors[] = "Sorry... username already taken";
				} else {
					#If the username doesn't exists, create new user
					$sql = "INSERT INTO user(username, password)
				VALUES('$username', SHA1('$password'))";
					$r = @mysqli_query($dbc, $sql);
					if ($r) {
						header('Location: login.php');
					} else {
						echo '<h1>System Error</h1>
			<p class="error">You could not registered</p>';
						echo '<p>' . mysqli_error($dbc) . '<br><br> Query: ' . $sql . '</p>';
					}
					mysqli_close($dbc);
					include('../includes/footer.html');
					exit();
				}
			}
		} else if ($_POST['password'] != $_POST['confirm_password'] && !empty($_POST['password'])) {
			$errors[] = "Password doesn't match.";
		}
		foreach ($errors as $msg) {
			echo "• $msg<br>\n";
		}
		mysqli_close($dbc);
	}
}
?>

<body>
	<div class="container">
		<h1>Register to G-Review</h1>
		<form method="post" action="register.php">
			<label>Username<sup>*</sup></label><br>
			<input type="text" name="username" class="formfield" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>"><br>
			<label>Password<sup>*</sup></label><br>
			<input type="password" name="password" class="formfield" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"><br>
			<label>Confirm Password<sup>*</sup></label><br>
			<input type="password" class="formfield" name="confirm_password" value="<?php if (isset($_POST['confirm_password'])) echo $_POST['confirm_password']; ?>"><br>
			<sup><?php login_check() ?></sup>
			<input type="submit" name="submit" class="formbutton" value="Create Account">
		</form>
	</div>
</body>

<?php
include("../includes/footer.html");
?>