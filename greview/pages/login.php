<?php
function submit_login()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        require('../includes/mysqli_connect.php');
        $errors = array();
        if (empty($_POST['username'])) {
            $errors[] = "You forgot enter username.";
        }
        if (empty($_POST['password'])) {
            $errors[] = "You forgot enter password.";
        }
        if (empty($errors)) {
            $username = $_POST['username'];
            $password = sha1($_POST['password']);

            $sql = "SELECT * FROM user where username='" . $username . "' AND password='" . $password . "' LIMIT 1";

            $result = mysqli_query($dbc, $sql);

            if (mysqli_num_rows($result) == 1) {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $username;
                header('Location: ../index.php');
            } else {
                $errors[] = "You have entered incorrect Username or Password";
            }
        }
        foreach ($errors as $msg) {
            echo "• $msg<br>\n";
        }
        exit();
        mysqli_close($dbc);
    }
}
?>

<!DOCTYPE html>
<html lang="eng">

<head>
    <title>Login - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/log_in.css" type="text/css" />

<?php
#template
include('../includes/header.html');
?>

<body>
    <div class="rectangle">
        <h1>Login to G-Review</h1>
        <form method="POST" action="login.php">
            <label>Username<sup>*</sup></label><br>
            <input type="text" name="username" class="formfield"><br>
            <label>Password<sup>*</sup></label><br>
            <input type="password" name="password" class="formfield"><br>
            <input type="submit" class="formbutton1" value="Login">
        </form>
        <p class="account">Don't have an account?</p>
        <button class="formbutton2"><a href="../pages/register.php">Register</a></button>
        <p class="account"><sup><?php submit_login() ?></sup></p>
    </div>
</body>

<?php
include("../includes/footer.html");
?>


