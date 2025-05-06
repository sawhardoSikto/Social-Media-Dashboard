<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="edit-body">
    <div class="edit-container">
        <h3 class="edit-title">Edit Your Profile</h3>
        <img src="https://static.vecteezy.com/system/resources/previews/009/398/577/original/man-avatar-clipart-illustration-free-png.png"
            alt="Avatar" class="profile-avatar" width="100" height="100">

        <form class="edit-form" onsubmit="return validateEditProfileForm()">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" class="form-input" value="John Doe" />
                <p id="nameError" class="error-message"></p>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-input" value="johndoe@example.com" />
                <p id="emailError" class="error-message"></p>
            </div>

            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" id="phone" name="phone" class="form-input" value="01234567891" />
                <p id="phoneError" class="error-message"></p>
            </div>

            <button type="submit" class="submit-btn">Save Changes</button>
            <p id="successMsg" class="success-message"></p>
        </form>

        <a href="change-avatar.php" class="profile-link">Change Avatar</a><br>
        <a href="update-password.php" class="profile-link">Update Password</a><br>
        <a href="view-profile.php" class="password-link">Back to View Profile</a>
    </div>

    <script>
        function validateEditProfileForm() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var nameError = document.getElementById("nameError");
            var emailError = document.getElementById("emailError");
            var phoneError = document.getElementById("phoneError");
            var successMsg = document.getElementById("successMsg");
            var isValid = true;


            successMsg.innerHTML = "";
            nameError.innerHTML = "";
            emailError.innerHTML = "";
            phoneError.innerHTML = "";


            if (name === "") {
                nameError.innerHTML = "Name cannot be empty.";
                isValid = false;
            }


            if (email === "") {
                emailError.innerHTML = "Email cannot be empty.";
                isValid = false;
            } else if (!(email.includes("@") && email.includes("."))) {
                emailError.innerHTML = "Enter a valid email address.";
                isValid = false;
            } else {
                var at = email.indexOf("@"), dot = email.lastIndexOf(".");
                if (at < 1 || dot < at + 2 || dot + 2 >= email.length) {
                    emailError.innerHTML = "Enter a valid email address.";
                    isValid = false;
                }
            }


            if (phone === "") {
                phoneError.innerHTML = "Phone number cannot be empty.";
                isValid = false;
            } else if (isNaN(phone) || phone.length != 11) {
                phoneError.innerHTML = "Phone number must be 11 digits.";
                isValid = false;
            }

            if (isValid) {
                successMsg.innerHTML = "Profile updated successfully!";
            }

            return false;
        }
    </script>
</body>

</html>