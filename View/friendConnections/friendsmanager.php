<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Friends Manager</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="friends-body">
    <div class="container">
        <h2>Friends Manager</h2>
        <h3>Close Friends</h3>
        <table class="connection-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td><button class="remove-btn">Remove</button></td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td><button class="remove-btn">Remove</button></td>
                </tr>
            </tbody>
        </table>

        <h3>Acquaintances</h3>
        <table class="connection-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mike Johnson</td>
                    <td><button class="remove-btn">Remove</button></td>
                </tr>
            </tbody>
        </table>

        <a href="followRequests.php" class="nav-link">Manage Requests</a><br>
        <a href="suggestionEngine.php" class="nav-link">People You May Know</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>