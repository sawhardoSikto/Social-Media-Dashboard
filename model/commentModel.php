<?php
require_once('db.php');

function addComment($postId, $username, $comment) {
    $con = getConnection();
    $sql = "INSERT INTO comments (post_id, username, content) VALUES ('$postId', '$username', '$comment')";
    return mysqli_query($con, $sql);
}

function getCommentsByPostId($postId) {
    $con = getConnection();
    $sql = "SELECT username, content FROM comments WHERE post_id = $postId ORDER BY created_at ASC";
    $result = mysqli_query($con, $sql);
    $comments = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $comments[] = "<strong>{$row['username']}:</strong> " . htmlspecialchars($row['content']);
    }

    return $comments;
}
?>
