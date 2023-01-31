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

#Displays information about a specific game, according to the game that user has selected
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
#Displays existing reviews of a specific user on a specific game
    $username = $_SESSION["username"];
    $sql = "SELECT * FROM review, user, game WHERE game.nama_game='$nama_game' AND user.username='$username' AND 
    review.id_user = user.id_user AND review.id_game = game.id_game";
    $r = @mysqli_query($dbc, $sql);
    while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
        $rating = $row['rating'];
        $comment = $row['comment'];
    }
    if(!isset($rating) || !isset($comment)){
        header("Location: edit_review.php?name=" . $name . "");
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

#Delete specific user comment on specific game, by their id_review
if (isset($_GET['delete']) && $_GET['delete'] == 1) {
    $games = $_GET['name'];
    $username = $_SESSION['username'];
    $sql = "SELECT review.id_review, review.id_user, review.id_game FROM review, user, game WHERE user.username='$username' AND
        game.nama_game=$games AND review.id_user = user.id_user AND review.id_game=game.id_game";

    $result = mysqli_query($dbc, $sql);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $id_review = $row['id_review'];
    }

    $sql = "DELETE FROM review WHERE id_review=$id_review";
    $result = mysqli_query($dbc, $sql);

    if ($result) {
        header("Location: desc.php?name=$games");
    } else {
        echo "Error Occured";
    }
}
?>
<head>
    <title><?php echo $nama_game; ?> - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/review.css" type="text/css" />

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
        <img src="<?php echo $src ?>" width="25%" height="15%" alt="gambar" />
        <pre class="descatas">Platform		: <?php for ($i = 0; $i < $total_row; $i++) {
                                                    echo $platform[$i];
                                                    if ($i != ($total_row - 1)) {
                                                        echo ", ";
                                                    }
                                                } ?></pre>
        <pre class="desc">Release Date		: <?php echo $release_date; ?></pre>
        <pre class="desc">Developer		: <?php echo $developer; ?></pre>
        <div class="container2" >
            <h1>My Review</h1>
            <hr / class="garisreview" style="position:relative;">
            <div class="scorekiri" style="border-right: 5px solid black; border-left: 2px solid black;
                    <?php if ($rating>=7): ?>
                        background-color: #2CF00C;"
                    <?php elseif($rating>4 && $rating<=6): ?>
                        background-color: #ff7f08;"   
                    <?php elseif($rating<=4 && $rating>=1):?>
                        background-color: #ff0000;"
                    <?php endif ?>>
                <h4><?php echo $rating; ?></h4></div>
                <div class="isireview">
                <p style="font-size:45px"><?php echo $comment; ?></p>
            </div>
            <hr / class="garissubmit"><br>
            <div class="tempatbutton" >
                <a class="editbutton" href="review.php?name='<?php echo $nama_game; ?>'&delete=1" onclick="javascript: return confirm('Are you sure?')"><button>Delete</button></a>
                <a class="editbutton" href="edit_review.php?name='<?php echo $nama_game?>'&comment=<?php echo $comment?>&rating=<?php echo $rating?>"><button>Edit</button></a>
            </div>
        </div>
    </div>
</body>

<?php
include("../includes/footer.html");
?>