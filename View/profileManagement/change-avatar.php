<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Change Avatar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="avatar-body">
    <div class="avatar-container">
        <h3 class="avatar-title">Change Your Avatar</h3>

        <img src="https://static.vecteezy.com/system/resources/previews/009/398/577/original/man-avatar-clipart-illustration-free-png.png"
            alt="Current Avatar" class="avatar-preview" width="100" height="100">

        <form class="avatar-form" onsubmit="return validateAvatarForm()" action="upload-avatar.php" method="post"
            enctype="multipart/form-data">
            <div class="avatar-form-group">
                <label for="avatarFile">Upload New Avatar</label>
                <input type="file" id="avatarFile" name="avatarFile" class="avatar-input">
            </div>
            <span id="imageError" class="error-message"></span>

            <button type="submit" class="avatar-submit-btn">Upload Avatar</button>

        </form>

        <a href="edit-profile.php" class="avatar-link">Back to Edit Profile</a>
    </div>

    <script>
        function validateAvatarForm() {
            var fileInput = document.getElementById("avatarFile");
            var imageError = document.getElementById("imageError");
            var filePath = fileInput.value;
            var isValid = true;

            imageError.innerHTML = "";

            if (filePath === "") {
                imageError.innerHTML = "Please select an image file.";

                isValid = false;
            }

            return isValid;
        }
    </script>

</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>