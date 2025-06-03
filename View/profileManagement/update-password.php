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

        <form class="password-form" action="../../controller/process-password.php" method="post" onsubmit="return validatePasswordForm()">
            <div class="password-form-group">
                <label for="currentPassword">Current Password</label>
                <input type="password" id="currentPassword" name="currentPassword" class="password-input">
                <p id="currentPasswordError" class="error-message"></p>
            </div>

            <div class="password-form-group">
                <label for="newPassword">New Password</label>
                <input type="password" id="newPassword" name="newPassword" class="password-input">
                <p id="newPasswordError" class="error-message"></p>
            </div>

            <div class="password-form-group">
                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" class="password-input">
                <p id="confirmPasswordError" class="error-message"></p>
            </div>

            <button type="submit" class="password-submit-btn">Change Password</button>
            <p id="successMsg" class="success-message"></p>
        </form>

        <a href="edit-profile.php" class="password-link">Back to Edit Profile</a>
    </div>

    <script>
        function validatePasswordForm() {
            var currentPassword = document.getElementById("currentPassword").value;
            var newPassword = document.getElementById("newPassword").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            var currentPasswordError = document.getElementById("currentPasswordError");
            var newPasswordError = document.getElementById("newPasswordError");
            var confirmPasswordError = document.getElementById("confirmPasswordError");
            var successMsg = document.getElementById("successMsg");

            var isValid = true;

            
            currentPasswordError.innerHTML = "";
            newPasswordError.innerHTML = "";
            confirmPasswordError.innerHTML = "";
            successMsg.innerHTML = "";

            if (currentPassword === "") {
                currentPasswordError.innerHTML = "Current password cannot be empty.";
                isValid = false;
            }

            if (newPassword === "") {
                newPasswordError.innerHTML = "New password cannot be empty.";
                isValid = false;
            } else if (newPassword.length < 8) {
                newPasswordError.innerHTML = "New password must be at least 8 characters long.";
                isValid = false;
            }

            if (confirmPassword === "") {
                confirmPasswordError.innerHTML = "Confirm new password cannot be empty.";
                isValid = false;
            } else if (newPassword !== confirmPassword) {
                confirmPasswordError.innerHTML = "New password and confirm password do not match.";
                isValid = false;
            }

            return isValid;
        }
    </script>
</body>

</html>

<?php
} else {
    header('location: ../LoginAuth.html');
}
?>