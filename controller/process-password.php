<?php
session_start();
require_once("../model/userModel.php");

if (isset($_POST['currentPassword']) && isset($_POST['newPassword']) && isset($_POST['confirmPassword']) && isset($_SESSION['email'])) {
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_SESSION['email'];

    
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        echo "All fields are required.";
        exit();
    }

    if ($newPassword !== $confirmPassword) {
        echo "New password and confirm password do not match.";
        exit();
    }

    if (strlen($newPassword) < 8) {
        echo "New password must be at least 8 characters long.";
        exit();
    }

    
    $user = getUserByEmail($email); 
    if ($user && $currentPassword === $user['password']) { 
        
        $result = updatePassword($email, $newPassword); 

        if ($result) {
            header("Location: ../view/profileManagement/edit-profile.php");
            exit();
        } else {
            echo "Failed to update password.";
        }
    } else {
        echo "Incorrect current password.";
    }

} else {
    echo "Invalid request.";
}
?>