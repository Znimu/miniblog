<?php
require('controller/frontend.php');

$id = intval($_GET['id']);
$author = $_GET['author'];
$comment = $_GET['comment'];

$commentManager = new OpenClassrooms\Blog\Model\CommentManager();
$success = $commentManager->updateComment($id, $author, $comment);

if ($success === false) {
    echo 'Impossible de modifier le commentaire !';
}
else {
    echo "Comment updated !";
}