<!DOCTYPE html>
<html lang="eng">

<head>
    <title>My Profile - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/profile.css" type="text/css" />

<?php
#Make connection to database, check whether the user is logged in or not
session_start();
if(isset ($_SESSION["login"])){
    include('../includes/headeruser.html');
    $username = $_SESSION["username"];
}else if(!isset ($_SESSION["login"])){
    header('Location: login.php');
}
?>



<body>
    <div class="container">
        <p><img src="../images/profile.png" width="150px" height="150px" alt="profile" />
        <h1><?php echo $username  ?></h1>
        </p>
        <a href="edit_username.php"><button type="button" class="edit_user">Change Username</button></a>
        <a href="edit_profile.php"><button type="button" class="edit_button">Change Password</button></a>
		<a href="delete_profile.php?Del=<?php echo $username ?>" onclick="javascript: return confirm('Are you sure?')"><button type="button" class="tombol_delete"> Delete Account</button></a>
		<a href="logout.php"><button type="button" class="logout_button">Log Out</button></a>
        </ul> 
    </div>
</body>


<?php

include("../includes/footer.html");
?>