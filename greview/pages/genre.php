<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Genre - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/gen.css" type="text/css" />

<?php
session_start();
if(isset ($_SESSION["login"])){
    include('../includes/headeruser.html');
}else{
include('../includes/header.html');
}
?>

<body>
    <div>
        <p>
            <img class="genre" src="../images/genremenu.png" height="8%" width="100%" alt="menugenre" />
        </p>
        <section class="isigenre">
            <p>
                <a href="../pages/RPG.php">
                    <img class="rpg" src="../images/rpg.png" height="100%" width="33.3%" alt="rpg" />
                </a>
                <a href="../pages/Fighting.php">
                    <img class="fighting" src="../images/fighting.png" height="100%" width="33.3%" alt="fighting" />
                </a>
            </p>
            <p>
                <a href="../pages/Sport.php">
                    <img class="sport" src="../images/sport.png" height="100%" width="33.3%" alt="sport" />
                </a>
                <a href="../pages/BattleRoyale.php">
                    <img class="battle" src="../images/battle.png" height="100%" width="33.3%" alt="battle" />
                </a>
            </p>
        </section>
    </div>
</body>

<?php
include("../includes/footer.html");
?>