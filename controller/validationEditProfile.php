<?php


if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $isValid = true;

    // Name validation
    if ($name == "") {
        echo "Name cannot be empty.";
        $isValid = false;
    }

    // Email validation
    if ($email == "") {
        echo "Email cannot be empty.";
        $isValid = false;
    } else if (!(strpos($email, "@") !== false && strpos($email, ".") !== false)) {
        echo "Enter a valid email address.";
        $isValid = false;
    } else {
        $at = strpos($email, "@");
        $dot = strrpos($email, ".");
        if ($at < 1 || $dot < $at + 2 || $dot + 2 >= strlen($email)) {
            echo "Enter a valid email address.";
            $isValid = false;
        }
    }

    // Phone validation
    if ($phone == "") {
        echo "Phone number cannot be empty.";
        $isValid = false;
    } else if (!is_numeric($phone) || strlen($phone) != 11) {
        echo "Phone number must be 11 digits.";
        $isValid = false;
    }

    if ($isValid) {
        echo "Profile updated successfully!";
    }
}
?>