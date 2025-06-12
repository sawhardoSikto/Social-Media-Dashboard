<?php
require_once('../model/commentModel.php');

    $data = json_decode($_POST['json']);
    $postId = intval($data['post_id']);
    $username = 'sawhardo';
    $comment = trim($data['comment']);

    if ($comment !== "" && $postId > 0) {
        if (addComment($postId, $username, $comment)) {
            echo json_encode([
                'success' => true,
                'comment' => "<strong>You:</strong> " . htmlspecialchars($comment)
            ]);
        } else {
            echo json_encode(['success' => false, 'error' => 'DB insert error']);
        }
    } 

else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['post_id'])) {
    $postId = intval($_GET['post_id']);
    $comments = getCommentsByPostId($postId);
    echo json_encode(['success' => true, 'comments' => $comments]);
}

else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
