<!DOCTYPE html>
<html lang="eng">

<head>
    <title>My Profile - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/delete_profile.css" type="text/css" />

<?php
#Make connection to database, check whether the user is logged in or not
session_start();
if(isset ($_SESSION["login"])){
    include('../includes/headeruser.html');
    $username = $_SESSION["username"];
}else{
    header('Location: login.php');
}
?>

<body>
    <div class="container">
        <p><img src="../images/profile.png" width="150px" height="150px" alt="profile" />
        <h1>MY PROFILE </h1>
        </p>
        <ul>
            <li class="username">
                <pre>Username				: <?php echo $username  ?></pre>
            </li>
        </ul>
    </div>
</body>

<?php
#Delete currently logged in user then destroy current session
require('../includes/mysqli_connect.php');
	if(isset($_GET['Del'])){
		$username = $_GET['Del'];
		$query = "DELETE FROM user WHERE username = '".$username."'";
		$result = mysqli_query($dbc, $query);
		
		if($result){
			session_destroy();
			header("location:login.php");
		} else{
			echo 'Please check your query';
		}
	} else {
		header("location:login.php");
	}
mysqli_close($dbc);
include('../includes/footer.html');
?>
