<?php
$errors = [];
   // First Name
    if (empty($_GET["first_name"])) {
        $errors[] = "First name is required.";
    } else {
        $firstName = htmlspecialchars($_GET["first_name"]);
    }

    // Last Name
    if (empty($_GET["last_name"])) {
        $errors[] = "Last name is required.";
    } else {
        $lastName = htmlspecialchars($_GET["last_name"]);
    }

    // Email (basic check only — contains "@" and ".")
    if (empty($_GET["email"])) {
        $errors[] = "Email is required.";
    } else {
        $email = $_GET["email"];
        if (strpos($email, "@") === false || strpos($email, ".") === false) {
            $errors[] = "Email must contain '@' and '.'";
        }
    }

    // Gender
    if (empty($_GET["gender"])) {
        $errors[] = "Gender is required.";
    } else {
        $gender = $_GET["gender"];
    }

    // Password
    if (empty($_GET["password"])) {
        $errors[] = "Password is required.";
    } else {
        $password = $_GET["password"];
    }

    // Output
    if (empty($errors)) {
        echo "<h3 style='color:green;'>Signup Successful!</h3>";
        echo "<strong>Name:</strong> $firstName $lastName <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Gender:</strong> $gender <br>";
    } else {
        echo "<h3 style='color:red;'>There were errors:</h3>";
        echo "<ul>";
        foreach ($errors as $err) {
            echo "<li>$err</li>";
        }
        echo "</ul>";
    }


?>
