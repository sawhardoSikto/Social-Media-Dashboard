<?php

    session_start();
    require_once("../model/userModel.php");
    if(isset($_POST['submit'])){
        $username = trim($_POST['email']);
        $password = trim($_POST['password']);

       if ($username === "" || $password === "") {
        echo "Null username/password!";
        exit;
    } else {
        $user = ['username' => $username, 'password' => $password];
        $status = login($user);
        if ($status) {
             $_SESSION['status'] = true;
             $_SESSION['email'] = $username;
            header('location: ../view/ActivityFeed.php');
            exit();
        } else {
            echo "Invalid username or password!";
        }
    }
} else {
    echo "Invalid request! Please submit the form!";
}
?>
