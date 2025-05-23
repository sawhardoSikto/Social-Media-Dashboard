<?php
session_start();
if (isset($_SESSION['status'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Privacy Settings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    header h1 {
      text-align: center;
      color: #333;
    }

    main {
      max-width: 700px;
      background-color: #fff;
      margin: 30px auto;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    fieldset {
      border: 1px solid #ccc;
      border-radius: 6px;
      padding: 15px 20px;
      margin-bottom: 20px;
    }

    legend {
      font-weight: bold;
      color: #007bff;
    }

    label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    select, input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      margin-bottom: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

    button {
      padding: 8px 16px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #0056b3;
    }

    .delete-button {
      background-color: #dc3545;
      margin-top: 30px;
    }

    .delete-button:hover {
      background-color: #c82333;
    }

    ul {
      list-style-type: disc;
      padding-left: 20px;
    }

    ul#activity-log li,
    ul#blocked-users li {
      margin-bottom: 6px;
    }

    section h2 {
      color: #333;
      margin-bottom: 10px;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>
  <header>
    <h1>Privacy Settings</h1>
  </header>

  <main>
    <form action="javascript:void(0);">
      <fieldset>
        <legend>Post Visibility</legend>
        <label for="post-visibility">Choose visibility for your posts:</label><br />
        <select id="post-visibility" name="post-visibility" onchange="changeVisibility()">
          <option value="public">Public</option>
          <option value="friends">Friends Only</option>
          <option value="custom">Custom</option>
        </select>
      </fieldset>

      <fieldset>
        <legend>Block a User</legend>
        <label for="block-user">Enter username to block:</label><br />
        <input type="text" id="block-user" name="block-user" placeholder="Enter Username" />
        <button type="button" onclick="blockUser()">Block</button>
        <ul id="blocked-users"></ul>
      </fieldset>

      <section>
        <h2>Activity Log</h2>
        <ul id="activity-log">
          <li>Liked a post – 2 mins ago</li>
          <li>Updated profile – 1 hour ago</li>
          <li>Changed password – Yesterday</li>
        </ul>
      </section>
    </form>

    <!-- Delete Account Button -->
    <div class="center">
      <form action="accountDeletation.php" method="get">
        <button type="submit" class="delete-button">Delete My Account</button>
      </form>
    </div>
  </main>

  <script>
    function changeVisibility() {
      const visibility = document.getElementById("post-visibility").value;
      alert(`Post visibility changed to: ${visibility}`);
    }

    function blockUser() {
      const username = document.getElementById("block-user").value.trim();
      if (username === "") {
        alert("Please enter a username to block.");
        return;
      }

      // Add to blocked users list
      const blockedList = document.getElementById("blocked-users");
      const li = document.createElement("li");
      li.textContent = username;
      li.className = "blocked-item";
      blockedList.appendChild(li);

      // Update activity log
      const log = document.getElementById("activity-log");
      const logEntry = document.createElement("li");
      const now = new Date().toLocaleTimeString();
      logEntry.textContent = `Blocked ${username} - just now (${now})`;
      log.insertBefore(logEntry, log.firstChild);

      // Clear input
      document.getElementById("block-user").value = "";
    }
  </script>
</body>
</html>

<?php
} else {
  header('location: LoginAuth.html');
}
?>
