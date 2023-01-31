<!DOCTYPE html>
<html lang="eng">

<head>
    <title>PS4 - G-Review</title>
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
        <img src="../images/ps4list.png" width="100%" alt="comingsoon" />
    </p>
    <section class="submenu">
        <div class="list">
            <a href="../pages/desc.php?name='Tekken 7'"><img class="imglist" src="../images/tekken7.jpg" alt="comingsoon" /></a>
			<?php
			$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Tekken 7' AND review.id_game = game.id_game"; 
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
                    <?php endif ?>><a href="../pages/desc.php?name='Tekken 7'">
					<?php if(empty($average)){
                    echo "NR";
					}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Tekken 7'">Tekken 7</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/Fighting.php">Fighting</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Persona 5 Royal'"><img class="imglist" src="../images/persona5royal.jpg" alt="newest" /></a>
			<?php
			$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Persona 5 Royal' AND review.id_game = game.id_game"; 
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
                    <?php endif ?>><a href="../pages/desc.php?name='Persona 5 Royal'">
					<?php if(empty($average)){
                    echo "NR";
					}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Persona 5 Royal'">Persona 5 Royal</a></h1>
            <h2 class="platform"><u><a href="../pages/PS4.php">PS4</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='God Of War'"><img class="imglist" src="../images/godofwar.jpg" alt="comingsoon" /></a>
			<?php
			$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'God Of War' AND review.id_game = game.id_game"; 
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
                    <?php endif ?>><a href="../pages/desc.php?name='God Of War'">
					<?php if(empty($average)){
                    echo "NR";
					}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='God Of War'">God Of War</a></h1>
            <h2 class="platform"><u><a href="../pages/PS4.php">PS4</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='The Elder Scrolls V: Skyrim'"><img class="imglist" src="../images/skyrim.jpg" alt="comingsoon" /></a>
			<?php
			$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'The Elder Scrolls V: Skyrim' AND review.id_game = game.id_game"; 
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
                    <?php endif ?>><a href="../pages/desc.php?name='The Elder Scrolls V: Skyrim'">
					<?php if(empty($average)){
                    echo "NR";
					}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='The Elder Scrolls V: Skyrim'">The Elder Scrolls V: Skyrim</a></h1>
            <h2 class="platform"><u><a href="../pages/PC.php">PC</a></u>, <u><a href="../pages/PS4.php">PS4</a></u>, <u><a href="../pages/Nintendo.php">Nintendo Switch</a></u>, <u><a href="../pages/XboxOne.php">Xbox One</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

    </section>
</body>

<?php
include("../includes/footerlist.html");
?>