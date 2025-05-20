<?php
session_start();
if (isset($_SESSION['status'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }

    header h2 {
      text-align: center;
      color: #333;
      padding: 20px 0;
    }

    form {
      max-width: 500px;
      margin: auto;
      background-color: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 0 12px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
    }

    td {
      padding: 10px;
    }

    input[type="text"] {
      width: 100%;
      padding: 8px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    .error {
      color: red;
      font-size: 13px;
    }

    button {
      background-color: #007bff;
      border: none;
      color: white;
      padding: 10px 16px;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>

<header>
  <h2>Contact Us</h2>
</header>

<main>
  <form method="POST" onsubmit="return validate()">
    <table>
      <tr>
        <td>Full Name:</td>
        <td><input type="text" name="fname" id="fname"></td>
      </tr>
      <tr><td colspan="2"><p id="nmsg" class="error"></p></td></tr>

      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" id="email"></td>
      </tr>
      <tr><td colspan="2"><p id="emsg" class="error"></p></td></tr>

      <tr>
        <td>Your Message:</td>
        <td><input type="text" name="message" id="message"></td>
      </tr>
      <tr><td colspan="2"><p id="mmsg" class="error"></p></td></tr>

      <tr>
        <td>CAPTCHA: What is 4 + 3?</td>
        <td><input type="text" name="capcha" id="capcha"></td>
      </tr>
      <tr><td colspan="2"><p id="cmsg" class="error"></p></td></tr>

      <tr>
        <td colspan="2" class="center">
          <button type="submit">SUBMIT</button>
        </td>
      </tr>
    </table>
  </form>
</main>

<script>
function validate() {
  let valid = true;

  const fname = document.getElementById("fname").value.trim();
  const email = document.getElementById("email").value.trim();
  const message = document.getElementById("message").value.trim();
  const capcha = document.getElementById("capcha").value.trim();

  document.getElementById("nmsg").innerHTML = "";
  document.getElementById("emsg").innerHTML = "";
  document.getElementById("mmsg").innerHTML = "";
  document.getElementById("cmsg").innerHTML = "";

  if (fname === "") {
    document.getElementById("nmsg").innerHTML = "Please enter your full name";
    valid = false;
  }

  if (email === "") {
    document.getElementById("emsg").innerHTML = "Email is required";
    valid = false;
  } else if (!email.includes("@") || email.indexOf("@") !== email.lastIndexOf("@")) {
    document.getElementById("emsg").innerHTML = "Invalid email format";
    valid = false;
  }

  if (message === "") {
    document.getElementById("mmsg").innerHTML = "Please write your message";
    valid = false;
  }

  if (capcha === "") {
    document.getElementById("cmsg").innerHTML = "Captcha is required";
    valid = false;
  } else if (capcha !== "7") {
    document.getElementById("cmsg").innerHTML = "Wrong answer. Hint: 4 + 3";
    valid = false;
  }

  return valid;
}
</script>

</body>
</html>
<?php
} else {
  header('location: LoginAuth.html');
}
?>