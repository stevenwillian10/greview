<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Battle Royale - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/glist.css" type="text/css" />

<?php
require('../includes/mysqli_connect.php');
session_start();
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    include('../includes/header.html');
}
?>

<body>
    <p id="zerospace">
        <img src="../images/battelroyalelist.png" width="100%" alt="sport" />
    </p>
    <section class="submenu">
        <div class="list">
            <a href="../pages/desc.php?name='PlayerUnknown\'s Battlegrounds'"><img class="imglist" src="../images/pubg.png" alt="xbox" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'PlayerUnknown\'s Battlegrounds' AND review.id_game = game.id_game"; 
				$avg = @mysqli_query($dbc, $rating_avg);
				while ($row = mysqli_fetch_array($avg, MYSQLI_ASSOC)) {
				$average = $row['average'];
				if($average == 10.0){
					$average = 10;
					}
				}?>
				<h1 class="scorelist"
                <?php if ($average>=7): ?>
                    style="background-color: #2CF00C; border: 2px solid #2CF00C;"
                <?php elseif($average>4 && $average<=6): ?>
                    style="background-color: #ff7f08; border: 2px solid #ff7f08;"   
                <?php elseif($average<=4 && $average>=1):?>
                    style="background-color: #ff0000; border: 2px solid #ff0000;"     
                <?php elseif(empty($average)):?>
                    style="background-color: #6b746a; border: 2px solid #6b746a;"
                <?php endif ?>><a href="../pages/desc.php?name='PlayerUnknown\'s Battlegrounds'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='PlayerUnknown\'s Battlegrounds'">PlayerUnknown's Battlegrounds</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/BattleRoyale.php">Battle Royale</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Apex Legends'"><img class="imglist" src="../images/apex.jpg" alt="xbox" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Apex Legends' AND review.id_game = game.id_game"; 
				$avg = @mysqli_query($dbc, $rating_avg);
				while ($row = mysqli_fetch_array($avg, MYSQLI_ASSOC)) {
				$average = $row['average'];
				if($average == 10.0){
					$average = 10;
					}
				}?>
				<h1 class="scorelist"
                <?php if ($average>=7): ?>
                    style="background-color: #2CF00C; border: 2px solid #2CF00C;"
                <?php elseif($average>4 && $average<=6): ?>
                    style="background-color: #ff7f08; border: 2px solid #ff7f08;"   
                <?php elseif($average<=4 && $average>=1):?>
                    style="background-color: #ff0000; border: 2px solid #ff0000;"     
                <?php elseif(empty($average)):?>
                    style="background-color: #6b746a; border: 2px solid #6b746a;"
                <?php endif ?>><a href="../pages/desc.php?name='Apex Legends'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Apex Legends'">Apex Legends</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="PS4.php">PS4</a></u>, <u><a href="../pages/Nintendo.php">Nintendo Switch</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/BattleRoyale.php">Battle Royale</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Fortnite'"><img class="imglist" src="../images/fortnite.jpg" alt="xbox" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Fortnite' AND review.id_game = game.id_game"; 
				$avg = @mysqli_query($dbc, $rating_avg);
				while ($row = mysqli_fetch_array($avg, MYSQLI_ASSOC)) {
				$average = $row['average'];
				if($average == 10.0){
					$average = 10;
					}
				}?>
				<h1 class="scorelist"
                <?php if ($average>=7): ?>
                    style="background-color: #2CF00C; border: 2px solid #2CF00C;"
                <?php elseif($average>4 && $average<=6): ?>
                    style="background-color: #ff7f08; border: 2px solid #ff7f08;"   
                <?php elseif($average<=4 && $average>=1):?>
                    style="background-color: #ff0000; border: 2px solid #ff0000;"     
                <?php elseif(empty($average)):?>
                    style="background-color: #6b746a; border: 2px solid #6b746a;"
                <?php endif ?>><a href="../pages/desc.php?name='Fortnite'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Fortnite'">Fortnite</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/Nintendo.php">Nintendo Switch</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/BattleRoyale.php">Battle Royale</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Overwatch'"><img class="imglist" src="../images/overwatch.jpg" alt="xbox" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Overwatch' AND review.id_game = game.id_game"; 
				$avg = @mysqli_query($dbc, $rating_avg);
				while ($row = mysqli_fetch_array($avg, MYSQLI_ASSOC)) {
				$average = $row['average'];
				if($average == 10.0){
					$average = 10;
					}
				}?>
				<h1 class="scorelist"
                <?php if ($average>=7): ?>
                    style="background-color: #2CF00C; border: 2px solid #2CF00C;"
                <?php elseif($average>4 && $average<=6): ?>
                    style="background-color: #ff7f08; border: 2px solid #ff7f08;"   
                <?php elseif($average<=4 && $average>=1):?>
                    style="background-color: #ff0000; border: 2px solid #ff0000;"     
                <?php elseif(empty($average)):?>
                    style="background-color: #6b746a; border: 2px solid #6b746a;"
                <?php endif ?>><a href="../pages/desc.php?name='Overwatch'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Overwatch'">Overwatch</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/Nintendo.php">Nintendo Switch</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/BattleRoyale.php">Battle Royale</a></u></h2>
        </div>

    </section>
</body>

<?php
include("../includes/footerlist.html");
?>