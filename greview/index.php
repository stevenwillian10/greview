<!DOCTYPE html>
<html lang="eng">

<head>
    <title>G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/index.css" type="text/css" />

<?php
session_start();
if(isset ($_SESSION["login"])){
    include('includes/headeruser.html');
}else{
include('includes/header.html');
}
?>

<body>
    <p>
        <a href="../pages/newest.php">
            <img class="newest" src="../images/newest.png" height="8%" width="100%" alt="newest" />
        </a>
    </p>
    <section class="submenu">
        <p>
            <a href="../pages/genre.php">
                <img src="../images/genre.png" height="100%" width="33.3%" alt="genre" />
            </a>
            <a href="../pages/platform.php">
                <img src="../images/platform.png" height="100%" width="33.3%" alt="platform" />
            </a>
            <a href="../pages/ComingSoon.php">
                <img src="../images/coming.png" height="100%" width="33.3%" alt="coming" />
            </a>
        </p>
    </section>
</body>

<?php
include("includes/footer.html");
?>