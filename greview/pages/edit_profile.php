<!DOCTYPE html>
<html lang="eng">

<head>
    <title>My Profile - G-Review</title>
    <meta charset="UTF 8">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" />
    <link rel="stylesheet" href="../css/edit_prof.css" type="text/css" />

<?php
#Make connection to database, check whether the user is logged in or not
session_start();
if (isset($_SESSION["login"])) {
    include('../includes/headeruser.html');
} else {
    header('Location: login.php');
}

function check_password()
{
#Check whether the user has fill the old, new, and confirm password field or not
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_SESSION["username"];
        require('../includes/mysqli_connect.php');
        $errors = array();
        if (empty($_POST['oldpassword'])) {
            $errors[] = "You forgot enter old password.";
        } else {
            $oldpassword = mysqli_real_escape_string($dbc, trim($_POST['oldpassword']));
            $oldpassword = sha1($oldpassword);
        }
        if (empty($_POST['newpassword'])) {
            $errors[] = "You forgot enter new password.";
        } else {
            $newpassword = mysqli_real_escape_string($dbc, trim($_POST['newpassword']));
            $newpassword = sha1($newpassword);
        }
        if (empty($_POST['confirm_password'])) {
            $errors[] = "You forgot confirm password.";
        } else if ($_POST['newpassword'] == $_POST['confirm_password']) {
            if (empty($errors)) {
				#Check if there is a username with the same password as the password entered in the old password field
                $sql = "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $oldpassword . "' LIMIT 1";

                $result = mysqli_query($dbc, $sql);

                if (mysqli_num_rows($result) == 1) {
					#If there was a match, update with new password
                    $sql = "UPDATE user SET password='" . $newpassword . "' WHERE username='" . $username . "'";
                    $r = @mysqli_query($dbc, $sql);
                    if ($r) {
                        header('Location: profile.php');
                    } else {
                        echo '<h1>System Error</h1>
			<p class="error">Could not change password</p>';
                        echo '<p>' . mysqli_error($dbc) . '<br><br> Query: ' . $sql . '</p>';
                    }
                    mysqli_close($dbc);
                    include('../includes/footer.html');
                    exit();
                } else {
					#If there wasn't any match, error
                    $errors[] = "Wrong old password";
                }
            }
        } else if ($_POST['newpassword'] != $_POST['confirm_password'] && !empty($_POST['newpassword'])) {
            $errors[] = "Confirm Password doesn't match.";
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
        <form method="POST" action="edit_profile.php">
            <ul>
                <li class="oldpassword">
                    <pre>Old Password</pre><input type="password" name="oldpassword" class="formfield">
                </li>
                <li class="password">
                    <pre>New Password</pre><input type="password" name="newpassword" class="formfield">
                </li>
                <li class="password">
                    <pre>Confirm New Password</pre><input type="password" name="confirm_password" class="formfield">
                </li>
                <?php check_password() ?>
            </ul>
            <input type="submit" class="save_button" value="Save Changes">
        </form>
    </div>
</body>

<?php
include("../includes/footer.html");
?>