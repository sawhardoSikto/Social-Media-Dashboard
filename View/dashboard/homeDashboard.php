<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="dashboard-body">
    <div class=" container">
        <h2>Social Media Dashboard</h2>
        <div class="widgets">
            <div class="widget" onclick="location.href='analyticsOverview.php'">
                <h3>Total Posts</h3>
                <p>152</p>
            </div>
            <div class="widget" onclick="location.href='analyticsOverview.php'">
                <h3>Followers</h3>
                <p>2,430</p>
            </div>
            <div class="widget" onclick="location.href='analyticsOverview.php'">
                <h3>Engagement</h3>
                <p>87%</p>
            </div>
        </div>
        <a href="quickActions.php" class="nav-link">Go to Quick Actions</a> <br>
        <a href="../photoAlbum/albumCreator.php" class="nav-link">Go to Photo Album</a> <br>
        <a href="../friendConnections/friendsmanager.php" class="nav-link">Go to Friend Manager</a> <br>

    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>