<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Suggestion Engine</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="suggestion-body">
    <div class="container">
        <h2>People You May Know</h2>
        <table class="connection-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Emily Carter</td>
                    <td><button class="follow-btn">Follow</button></td>
                </tr>
                <tr>
                    <td>David Lee</td>
                    <td><button class="follow-btn">Follow</button></td>
                </tr>
                <tr>
                    <td>Sara Kim</td>
                    <td><button class="follow-btn">Follow</button></td>
                </tr>
            </tbody>
        </table>

        <a href="friendsManager.php" class="nav-link">Back to Friends Manager</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>