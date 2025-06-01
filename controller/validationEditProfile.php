<?php
session_start();
require_once("../model/userModel.php");

if (isset($_POST['name']) && isset($_POST['email']) && isset($_SESSION['email'])) {
    
    $fullName = trim($_POST['name']);
    $email = trim($_POST['email']);
    $oldEmail = $_SESSION['email'];

    
    $parts = explode(" ", $fullName, 2);
    $firstName = $parts[0];
    $lastName = isset($parts[1]) ? $parts[1] : "";

    $result = updateUser($oldEmail, $firstName, $lastName, $email);

    if ($result) {
        $_SESSION['email'] = $email; 
        header("Location: ../view/profileManagement/view-profile.php");
    } else {
        echo "Failed to update profile.";
    }

} else {
    echo "Invalid request.";
}
?>
