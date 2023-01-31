<!DOCTYPE html>
<html lang="eng">

<head>
    <title>My Profile - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/edit_username.css" type="text/css" />

<?php
session_start();
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    header('Location: login.php');
}

function check_username(){
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $old_username = $_SESSION["username"];
        require('../includes/mysqli_connect.php');
        $errors = array();
        if (empty($_POST['username'])) {
            $errors[] = "Username can not be empty.";
        } else {
            $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
        }
        if (empty($errors) && $username!=$old_username) {
            $sql = "SELECT * FROM user WHERE username='" . $username . "' LIMIT 1";
            $result = mysqli_query($dbc, $sql);
            if (mysqli_num_rows($result) == 1) {
                $errors[] = "Sorry... username already taken";
                
            } else {
                $sql = "UPDATE user SET username='" . $username . "' WHERE username='" . $old_username. "'";
                $r = @mysqli_query($dbc, $sql);
                if ($r) {
                    $_SESSION["username"] = $username;
                    header('Location: profile.php');
                } else {
                    echo '<h1>System Error</h1>
        <p class="error">Could not change username</p>';
                    echo '<p>' . mysqli_error($dbc) . '<br><br> Query: ' . $sql . '</p>';
                }
            }
        }
        else if(empty($errors) && $username==$old_username){
            header('Location: profile.php');
        }
        foreach ($errors as $msg) {
            echo '<sup>• ' . $msg . '<br></sup>';
        }
        mysqli_close($dbc);
    }
}
?>

<body>
    <div class="container">
        <p><img src="../images/profile.png" width="150px" height="150px" alt="profile" />
        <h1>MY PROFILE</h1>
        </p>
        <form method="POST" action="edit_username.php">
            <ul>
                <li class="username">
                    <pre>Username</pre><input type="text" name="username" class="formfield" value="<?php echo $_SESSION["username"];?>">
                </li>
                <?php check_username();?>
            </ul>
            <input type="submit" class="save_button" value="Save Changes">
        </form>
    </div>
</body>

<?php
include("../includes/footer.html");
?>