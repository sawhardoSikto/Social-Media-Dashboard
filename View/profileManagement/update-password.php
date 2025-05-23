<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Password</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="password-body">
    <div class="password-container">
        <h3 class="password-title">Update Your Password</h3>

        <form class="password-form" action="process-password.php" method="post">
            <div class="password-form-group">
                <label for="currentPassword">Current Password</label>
                <input type="password" id="currentPassword" name="currentPassword" class="password-input" >
            </div>

            <div class="password-form-group">
                <label for="newPassword">New Password</label>
                <input type="password" id="newPassword" name="newPassword" class="password-input"  >
            </div>

            <div class="password-form-group">
                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="password-input" >
            </div>

            <button type="submit" class="password-submit-btn">Change Password</button>
        </form>

        <a href="edit-profile.php" class="password-link">Back to Edit Profile</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>