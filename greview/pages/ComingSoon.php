<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Coming Soon - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/comingsoon.css" type="text/css" />


<?php
session_start();
if(isset ($_SESSION["login"])){
    include('../includes/headeruser.html');
}else{
include('../includes/header.html');
}
?>

<body>
    <p id="zerospace">
        <img src="../images/comingsoonlist.png" width="100%" alt="comingsoon" />
    </p>
    <section class="submenu">
        <div class="list">
        <img class="imglist" src="../images/digimon_survive.jpg" alt="comingsoon" />
            <h1 class="scorelist">N/A</h1>
            <h1 class="desctitle">Digimon Survive</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/Nintendo.php">Nintendo
                        Switch</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>


        <div class="list">
            <img class="imglist" src="../images/mario_golf.jpg" alt="comingsoon" /></a>
            <h1 class="scorelist">N/A</h1>
            <h1 class="desctitle">Mario Golf: Super Rush</h1>
            <h2 class="platform"><u><a href="../pages/Nintendo.php">Nintendo Switch</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/Sport.php">Sport</a></u></h2>
        </div>

        <div class="list">
            <img class="imglist" src="../images/outrider.jpg" alt="comingsoon" /></a>
            <h1 class="scorelist">N/A</a></h1>
            <h1 class="desctitle">Outriders</a></h1>
            <h2 class="platform"><u><a href="PC/html">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <img class="imglist" src="../images/aew.jpg" alt="comingsoon" /></a>
            <h1 class="scorelist">N/A</a></h1>
            <h1 class="desctitle">All Elite Wrestling</a></h1>
            <h2 class="platform"><u>N/A</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/Sport.php">Sport</a></u></h2>
        </div>

    </section>
</body>


<?php
include("../includes/footerlist.html");
?>