<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Quick Actions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="quick-actions-body">
    <div class=" container">
        <h2>Quick Actions</h2>
        <ul class="quick-list">
            <li><button onclick="location.href='../PostCreation/postComposer.php'">Create Post</button></li>
            <li><button onclick="alert('Scheduler opened')">Schedule Post</button></li>
            <li><button onclick="alert('Messages opened')">Check Messages</button></li>
        </ul>
        <a href="homeDashboard.php" class="nav-link">Back to Dashboard</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>