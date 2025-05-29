<?php
require_once('../model/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['json'])) {
    $data = json_decode($_POST['json'], true);
    $postId = intval($data['post_id']);
    $username = 'sawhardo'; // You can fetch it from session if using login system
    $comment = trim($data['comment']);

    if ($comment !== "" && $postId > 0) {
        $con = getConnection();
        $sql = "INSERT INTO comments (post_id, username, content) VALUES ('$postId', '$username', '$comment')";
        if (mysqli_query($con, $sql)) {
            echo json_encode([
                'success' => true,
                'comment' => "You: " . htmlspecialchars($comment)
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'DB error']);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid comment']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
