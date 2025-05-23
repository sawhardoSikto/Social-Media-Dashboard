<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Analytics Overview</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="analytics-body">
    <div class=" container">
        <h2>Analytics Overview</h2>
        <table class="analytics-table">
            <thead>
                <tr>
                    <th>Metric</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Posts This Week</td>
                    <td>32</td>
                </tr>
                <tr>
                    <td>New Followers</td>
                    <td>189</td>
                </tr>
                <tr>
                    <td>Likes</td>
                    <td>1,024</td>
                </tr>
                <tr>
                    <td>Shares</td>
                    <td>342</td>
                </tr>
            </tbody>
        </table>
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