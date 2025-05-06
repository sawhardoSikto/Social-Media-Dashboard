<?php
session_start();
if (isset($_COOKIE['status'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Profile</title>
    <link rel="stylesheet" href="style.css"> 
</head>

<body class="profile-body">
    <h3 class="profile-title">Your Profile</h3>
    <table class="profile-table">
        <tr>
            <td class="profile-label">Name:</td>
            <td class="profile-data">John Doe</td>
        </tr>
        <tr>
            <td class="profile-label">Email:</td>
            <td class="profile-data">johndoe@example.com</td>
        </tr>
        <tr>
            <td class="profile-label">Phone:</td>
            <td class="profile-data">01234567891</td>
        </tr>
        <tr>
            <td class="profile-label">Profile Picture:</td>
            <td class="profile-data">
                <img src="https://static.vecteezy.com/system/resources/previews/009/398/577/original/man-avatar-clipart-illustration-free-png.png" alt="Avatar" class="profile-avatar" width="100" height="100">
            </td>
        </tr>
    </table>
    <br>
    <a href="edit-profile.php" class="profile-link">Edit Profile</a><br>

    <a href="../logout.php">logout</a>
   
</body>

</html>

<?php

}
else{
    header('location: ../loginAuth.php');
}
?>
