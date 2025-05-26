<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $json = json_decode($_POST['json']);
    $comment = trim($json->comment); 
    

    if ($comment !== "") {
        echo json_encode([
            'success' => true,
            'comment' => "You: " . htmlspecialchars($comment),
            
        ]);
    } else {
        echo json_encode(['success' => false]);
    }
} else {
    echo json_encode(['success' => false]);
}
?>
