<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reply Interface</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="reply-body">
    <div class="container">
        <h2>Write a Reply</h2>
        <form>
            <textarea class="reply-textarea" placeholder="Reply with @mention if needed..."></textarea>
            <button type="submit" class="reply-btn">Post Reply</button>
        </form>
        <a href="commentThread.php" class="nav-link">Back to Comments</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>