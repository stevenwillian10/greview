<!DOCTYPE html>
<html lang="eng">

<?php
#Make connection to database, check whether the user is logged in or not
session_start();
require('../includes/mysqli_connect.php');
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    header('Location: login.php');
}

#Check whether the user has entered a review and rating or not
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['likert'])) {
        $errors[] = "You forgot input your rating.";
    } else {
        $likert = mysqli_real_escape_string($dbc, trim($_POST['likert']));
    }
    if (empty($_POST['tulisreview'])) {
        $errors[] = "You forgot enter your review.";
    } else {
        $tulisreview = mysqli_real_escape_string($dbc, trim($_POST['tulisreview']));
    }

#Check if there was already a review on specific selected game with username that currently logged in
    if (empty($errors)) {
        $nama_game = $_GET['name'];
        $username = $_SESSION['username'];

        $sql = "SELECT id_user FROM user WHERE username='$username' LIMIT 1";
        $r = @mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            $id_user = $row['id_user'];
        }

        $sql = "SELECT id_game FROM game WHERE nama_game=$nama_game LIMIT 1";
        $r = @mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            $id_game = $row['id_game'];
        }

        $sql = "SELECT review.id_review, review.id_user, review.id_game FROM review, user, game WHERE user.username='$username' AND
        game.nama_game=$nama_game AND review.id_user = user.id_user AND review.id_game=game.id_game";

        $result = mysqli_query($dbc, $sql);

#Update if there was any review with username that currently logged in 
        if (mysqli_num_rows($result) == 1) { //Update
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $id_review = $row['id_review'];
            }
            $sql = "UPDATE review
            SET id_user = $id_user, id_game= $id_game, comment='$tulisreview', rating=$likert, comment_time=NOW()
            WHERE id_review=$id_review;";

            $result = mysqli_query($dbc, $sql);

            if ($result) {
                header("Location: desc.php?name=$nama_game");
            } else {
                echo 'error occured';
            }
#Insert new data if there wasn't any review with username that currently logged in
        } else { 
            $sql = "INSERT INTO review (id_user, id_game, comment, rating, comment_time)
            VALUES ($id_user, $id_game, '$tulisreview', $likert, NOW());";

            $result = mysqli_query($dbc, $sql);

            if ($result) {
                header("Location: desc.php?name=$nama_game");
            } else {
                echo 'error occured';
            }
        }
    }
}

#Displays information about a specific game, according to the game that user has selected
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $rating = null;
    if(isset($_GET['comment']) && isset($_GET['rating'])){
    $comment = $_GET['comment'];
    $rating = $_GET['rating'];
    }
    $sql = "SELECT * FROM game WHERE nama_game=" . $name . " LIMIT 1";
    $r = @mysqli_query($dbc, $sql);
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $id_game = $row['id_game'];
        $nama_game = $row['nama_game'];
        $genre = $row['genre'];
        $description = $row['description'];
        $release_date = $row['release_date'];
        $developer = $row['developer'];
        $image = $row['image'];
    }
    $platform = array();
    $sql = "SELECT nama_platform FROM game, platform, game_platform WHERE nama_game=" . $name . " AND
    game.id_game = game_platform.id_game AND platform.id_platform = game_platform.id_platform";
    $r = @mysqli_query($dbc, $sql);
    $total_row = 0;
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $total_row = $total_row + 1;
        array_push($platform, $row['nama_platform']);
    }
    $rating_avg = "SELECT ROUND(AVG(rating),1) AS average FROM review WHERE id_game = $id_game";  
    $avg = @mysqli_query($dbc, $rating_avg);
    while ($row = mysqli_fetch_array($avg, MYSQLI_ASSOC)) {
        $average = $row['average'];
        if($average == 10.0){
            $average = 10;
        }
    }
} else {
    echo "error occured";
}
?>
<head>
    <title><?php echo $nama_game ?> - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/edit_review.css" type="text/css" />
<body>
    <div class="container">
        <h1><?php echo $nama_game; ?></h1>
        <h3 class="score"
                    <?php if ($average>=7): ?>
                        style="background-color: #2CF00C; border: 2px solid #2CF00C;"
                    <?php elseif($average>4 && $average<=6): ?>
                        style="background-color: #ff7f08; border: 2px solid #ff7f08;"   
                    <?php elseif($average<=4 && $average>=1):?>
                        style="background-color: #ff0000; border: 2px solid #ff0000;"     
                    <?php elseif(empty($average)):?>
                        style="background-color: #6b746a; border: 2px solid #6b746a;"
                    <?php endif ?>>
                    <?php if(empty($average)){
                    echo "NR";
                }else{echo $average;}?></h3>
        <h2>Rating:</h2>
        <?php
        $src = "../images/";
        $src .= $image;
        ?>
        <img src="<?php echo $src ?>" width="25%" height="15%" alt="Mario" />
        <pre class="descatas">Platform		: <?php for ($i = 0; $i < $total_row; $i++) {
                                                    echo $platform[$i];
                                                    if ($i != ($total_row - 1)) {
                                                        echo ", ";
                                                    }
                                                } ?></pre>
        <pre class="desc">Release Date		: <?php echo $release_date; ?></pre>
        <pre class="desc">Developer		: <?php echo $developer; ?></pre>
        <div class="container2">
            <h1>My Review</h1>
            <hr />
            <h1>Score</h1>
            <div class="wrap">
                <form action="edit_review.php?name='<?php echo $nama_game ?>'" method="POST" id="review">
                    <ul class='likert'>
                        <li>
                            <input type="radio" name="likert" value="1"
                            <?php if ($rating == 1 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>1</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="2"
                            <?php if ($rating == 2 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>2</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="3"
                            <?php if ($rating == 3 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>3</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="4"
                            <?php if ($rating == 4 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>4</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="5"
                            <?php if ($rating == 5 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>5</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="6"
                            <?php if ($rating == 6 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>6</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="7"
                            <?php if ($rating == 7 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>7</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="8"
                            <?php if ($rating == 8 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>8</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="9"
                            <?php if ($rating == 9 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>9</label>
                        </li>
                        <li>
                            <input type="radio" name="likert" value="10"
                            <?php if ($rating == 10 && isset($rating)): ?>
                                checked="checked"
                            <?php endif ?>>
                            <label>10</label>
                        </li>
                    </ul>
            </div>
            <hr />
            <textarea style="font-size: 25px;" maxlength="250" id="review" name="tulisreview" rows="7" cols="70" placeholder="Write your review here..(Max 250 Characters)"><?php if(isset($comment)){echo $comment;}?></textarea>
            <hr />
            <br>
            <input type="submit" class="formbutton" value="Submit">
            </form>
            <br>
            <sup>
                <?php
                foreach ($errors as $msg) {
                    echo "• $msg<br>\n";
                }
                ?>
            </sup>
        </div>
    </div>
</body>

<?php
include("../includes/footer.html");
?>