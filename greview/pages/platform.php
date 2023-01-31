<!DOCTYPE html>
<html lang="eng">
<head>
    <title>Platform - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/plat.css" type="text/css" />

<?php
session_start();
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    include('../includes/header.html');
}
?>

<body>
    <div>
        <p>
            <img class="platform" src="../images/platmenu.png" height="8%" width="100%" alt="menugenre" />
        </p>
        <section class="isiplatform">
            <p>
                <a href="../pages/PS4.php">
                    <img class="ps4" src="../images/ps4.png" height="100%" width="33.3%" alt="ps4" />
                </a>
                <a href="../pages/XboxOne.php">
                    <img class="xbox" src="../images/xbox.png" height="100%" width="33.3%" alt="xbox" />
                </a>
            </p>
            <p>
                <a href="../pages/Nintendo.php">
                    <img class="nintendo" src="../images/nintendo.png" height="100%" width="33.3%" alt="nintendo" />
                </a>
                <a href="../pages/PC.php">
                    <img class="pc" src="../images/pc.png" height="100%" width="33.3%" alt="pc" />
                </a>
            </p>
        </section>
    </div>
</body>

<?php
include("../includes/footer.html");
?>