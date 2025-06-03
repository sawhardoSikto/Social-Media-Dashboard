<?php
    //include('db.php');
    //include_once('db.php');
    //require('db.php');
    require_once('db.php');

    function login($user){
        $con = getConnection();
        $sql = "select * from users where email='{$user['username']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) == 1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($user){
        $con = getConnection();
        $sql = "insert into users values(null, '{$user['firstName']}', '{$user['lastName']}', '{$user['email']}','{$user['gender']}','{$user['password']}')";
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getUserByEmail($email){
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}

function updateUser($oldEmail, $firstName, $lastName, $newEmail){
    $con = getConnection();
    $sql = "UPDATE users SET fname='$firstName', lname='$lastName', email='$newEmail' WHERE email='$oldEmail'";
    return mysqli_query($con, $sql);
}

function updatePassword($email, $newPassword){
    $con = getConnection();
    $sql = "UPDATE users SET password='$newPassword' WHERE email='$email'";
    return mysqli_query($con, $sql);
}

?>