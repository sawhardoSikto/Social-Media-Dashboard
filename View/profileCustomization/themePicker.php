<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Theme Picker</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="theme-body">
    <div class=" container">
        <h2>Choose Your Theme</h2>

        <div class="theme-options">
            <label>
                <input type="radio" name="theme" value="light" checked> Light
            </label>
            <label>
                <input type="radio" name="theme" value="dark"> Dark
            </label>
            <label>
                <input type="radio" name="theme" value="custom"> Custom
            </label>
        </div>

        <button type="submit" class="submit-btn">Save Theme</button>
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