<?php
session_start();
if (isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comment Thread</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="comment-body">
    <div class="container">
        <h2>Comments</h2>
        <div class="comment">
            <strong>Alice:</strong> Great post! <button class="vote-btn">▲</button> <button class="vote-btn">▼</button>
            <div class="reply">
                <strong>Bob:</strong> @Alice I agree!
            </div>
        </div>

        <form action="replyInterface.php">
            <button type="submit" class="reply-link">Reply</button>
        </form>

        <a href="reactionSelector.php" class="nav-link">Back to Reactions</a>
    </div>
</body>

</html>

<?php

}
else{
    header('location: ../LoginAuth.html');
}
?>