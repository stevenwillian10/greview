<!DOCTYPE html>
<html lang="eng">
<?php
require('../includes/mysqli_connect.php');
session_start();
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    include('../includes/header.html');
}
if (isset($_GET['name'])) {
    $name = $_GET['name'];
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

    $users = array();
    $rates = array();
    $comments = array();
    $dates = array();
    $total_comment = 0;
    $sql = "SELECT user.username, review.rating, review.comment, review.comment_time FROM game, user, review 
    WHERE game.nama_game=$name AND review.id_game=game.id_game AND review.id_user=user.id_user ORDER BY comment_time DESC LIMIT 3";
    $result = @mysqli_query($dbc, $sql);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $total_comment = $total_comment + 1;
        array_push($users, $row['username']);
        array_push($rates, $row['rating']);
        array_push($comments, $row['comment']);
        $date = new DateTime($row['comment_time']);
        $date = date_format($date, 'd M Y');
        array_push($dates, $date);
    }
} else {
    echo "error occured";
}
?>

<head>
    <title><?php echo $nama_game; ?> - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/desc.css" type="text/css" />

<body>
    <div class="rectangle">
        <!-- Info terkini selesai-->
        <div id="halamanartikel" class="clear">
            <section class="sectionkiri">
                <h1 class="gametitle"><?php echo $nama_game; ?></h1>
                <ul>
                    <li class="desc">
                        <pre>Platform			: <?php for ($i = 0; $i < $total_row; $i++) {
                                                        echo $platform[$i];
                                                        if ($i != ($total_row - 1)) {
                                                            echo ", ";
                                                        }
                                                    } ?></pre>
                    </li>
                    <li class="desc">
                        <pre>Release Date  		: <?php echo $release_date; ?></pre>
                    </li>
                    <li class="desc">
                        <pre>Developer      		: <?php echo $developer; ?></pre>
                    </li>
                </ul>
            </section>
            <section class="sectiontengah">
                <?php
                $src = "../images/";
                $src .= $image;
                ?>
                <img class="img" src="<?php echo $src ?>" alt="newest" />
            </section>
            <section class="sectionkanan">
                <p id="rating">Rating:</p>
                <h2 class="score" <?php if ($average >= 7) : ?> style="background-color: #2CF00C; border: 2px solid #2CF00C;" <?php elseif ($average > 4 && $average <= 6) : ?> style="background-color: #ff7f08; border: 2px solid #ff7f08;" <?php elseif ($average <= 4 && $average >= 1) : ?> style="background-color: #ff0000; border: 2px solid #ff0000;" <?php elseif (empty($average)) : ?> style="background-color: #6b746a; border: 2px solid #6b746a;" <?php endif ?>>
                    <?php if (empty($average)) {
                        echo "NR";
                    } else {
                        echo $average;
                    } ?></h2>
            </section>
            <br>
            <div class="desctext">
                <p><?php echo $description; ?></p>
            </div>
            <h2 class="hreview">Reviews</h2>
            <section class="reviews">
                <?php
                if (mysqli_num_rows($result) >= 1) {
                    for ($i = 0; $i < $total_comment; $i++) {
                        echo '
                    <div class="list">
                                <h1 style="float: left;
                                font-size: 40px;
                                padding: 25px 15px;
                                margin: 60px 0px 0px 40px;
                                border-radius: 10px;';
                                if ($rates[$i]>=7){
                                    echo 'background-color: #2CF00C; border: 2px solid #2CF00C;"';
                                }
                                elseif($rates[$i]>4 && $rates[$i]<=6){
                                    echo 'background-color: #ff7f08; border: 2px solid #ff7f08;"';
                                }elseif($rates[$i]<=4 && $rates[$i]>=1){
                                    echo 'background-color: #ff0000; border: 2px solid #ff0000;"';
                                }
                                echo '>' . $rates[$i] . '';
                        if ($rates[$i] < 10) {
                            echo '.0';
                        }
                        echo '</h1>
                                <h2 class="userlist">' . $users[$i] . '</h2>
                                <h2 class="datelist">' . $dates[$i] . '</h2>
                                <h2 class="reviewlist">“' . $comments[$i] . '”</h2>
                            </div>
                    ';
                    }
                } else {
                    echo '
                    <div class="list">
                    <p style="text-align:center; font-size: 70px; padding-top: 16%">NO REVIEW YET</p>
                    </div>';
                }
                ?>
            </section>
            <a class="formbutton1" href="review.php?name='<?php echo $nama_game; ?>'">My Review</a>
        </div>
    </div>
    </div>
</body>

<?php
include("../includes/footer.html");
?>