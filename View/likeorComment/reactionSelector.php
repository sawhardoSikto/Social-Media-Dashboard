<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reaction Selector</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="reaction-body">
    <div class="container">
        <h2> Post</h2>
        <div class="post-box">
            <p>This is a sample post. Choose your reaction:</p>
            <div class="reaction-area">
                <span>👍 Like</span>
                <span>❤️ Love</span>
                <span>😂 Haha</span>
            </div>
        </div>

        <a href="commentThread.php" class="nav-link">Go to Comments</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>