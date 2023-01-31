<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Nintendo Switch - G-Review</title>
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
        <img src="../images/nintendolist.png" width="100%" alt="nintendo" />
    </p>
    <section class="submenu">
        <div class="list">
            <a href="../pages/desc.php?name='Super Mario 3D World'"><img class="imglist" src="../images/mario.jpg" alt="nintendo" /></a>
           <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Super Mario 3D World' AND review.id_game = game.id_game"; 
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
                <?php endif ?>><a href="../pages/desc.php?name='Super Mario 3D World'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Super Mario 3D World'">Super Mario 3D World</a></h1>
            <h2 class="platform"><u><a href="../pages/Nintendo.php">Nintendo Switch</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Monster Hunter Rise'"><img class="imglist" src="../images/monsterhunter.jpg" alt="nintendo" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Monster Hunter Rise' AND review.id_game = game.id_game"; 
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
                <?php endif ?>><a href="../pages/desc.php?name='Monster Hunter Rise'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Monster Hunter Rise'">Monster Hunter Rise</a></h1>
            <h2 class="platform"><u><a href="../pages/Nintendo.php">Nintendo Switch</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='The Legend of Zelda: BOTW'"><img class="imglist" src="../images/zelda.jpg" alt="nintendo" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'The Legend of Zelda: BOTW' AND review.id_game = game.id_game"; 
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
                <?php endif ?>><a href="../pages/desc.php?name='The Legend of Zelda: BOTW'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='The Legend of Zelda: BOTW'">The Legend of Zelda: BOTW</a></h1>
            <h2 class="platform"><u><a href="../pages/Nintendo.php">Nintendo Switch</a></u>
            </h2>
            <h2 class="genre">Genre: <u><a href="../pages/RPG.php">RPG</a></u></h2>
        </div>

        <div class="list">
            <a href="../pages/desc.php?name='Ring Fit Adventure'"><img class="imglist" src="../images/ringfit.jpg" alt="nintendo" /></a>
            <?php
				$rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review,game WHERE nama_game = 'Ring Fit Adventure' AND review.id_game = game.id_game"; 
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
                <?php endif ?>><a href="../pages/desc.php?name='Ring Fit Adventure'">
				<?php if(empty($average)){
                    echo "NR";
				}else{echo $average;}?></a></h1>
            <h1 class="desctitle"><a href="../pages/desc.php?name='Ring Fit Adventure'">Ring Fit Adventure</a></h1>
            <h2 class="platform"><u><a href="../pages/Nintendo.php">Nintendo Switch</a></u></h2>
            <h2 class="genre">Genre: <u><a href="../pages/Sport.php">Sport</a></u></h2>
        </div>

    </section>
</body>

<?php
include("../includes/footerlist.html");
?>