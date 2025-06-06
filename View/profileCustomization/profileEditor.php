<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Profile Editor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="profile-body">
    <div class=" container">
        <h2>Edit Your Profile</h2>

        <div class="profile-photo-section">
            <h3>Profile Photo</h3>
            <form action="themePicker.php" enctype="multipart/form-data">
                <input type="file" id="profilePhoto" name="profilePhoto" accept="image/*" class="photo-input">
                <button type="submit" class="submit-btn">Next: Choose Theme</button>
            </form>
        </div>

        <div class="profile-cover-section">
            <h3>Cover Photo</h3>
            <input type="file" id="coverPhoto" name="coverPhoto" accept="image/*" class="photo-input">
        </div>

        <a href="bioSection.php" class="nav-link">Go to Bio Section</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>