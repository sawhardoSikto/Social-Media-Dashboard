<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bulk Selector</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bulk-body">
    <div class=" container">
        <h2>Select Photos</h2>
        <p>Select multiple photos for the album</p>
        <div class="photos">
            <label><input type="checkbox"> <img
                    src="https://img.freepik.com/free-vector/smiling-young-man-illustration_1308-174669.jpg?semt=ais_hybrid&w=740"></label>
            <label><input type="checkbox"> <img
                    src="https://thumbs.dreamstime.com/b/user-sign-icon-person-symbol-human-avatar-rich-man-84519083.jpg"></label>
            <label><input type="checkbox"> <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8bXXlgCBVRH1uLmaHZJ4qXyy_QiTCvLlOhw&s"></label>
        </div>
        <button>Continue</button>
        <a href="sharingControls.php" class="nav-link">Go to Sharing Controls</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>