<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bio Section</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bio-body">
    <div class=" container">
        <h2>Edit Your Bio</h2>

        <textarea placeholder="Write something about yourself..." class="bio-textarea"></textarea>

        <button type="submit" class="submit-btn">Save Bio</button>

        <a href="profileEditor.php" class="nav-link">Back to Profile Editor</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>