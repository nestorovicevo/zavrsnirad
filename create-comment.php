<?php
require 'connectToDB/connectionConfig.php';
require 'connectToDB/connection.php';
require 'connectToDB/commentsDB.php';

if ($_POST['name'] && $_POST['comment'] && $_POST['post_id']) {
    $author = $_POST['name'];
    $body = $_POST['comment'];
    $postId = (int)$_POST['post_id'];

    $connection = Connection::make($servername, $dbname, $username, $password);
    $commentsDB = new CommentsDB($connection);
    $commentsDB->insert($author, $body, $postId);

    header('Location: http://localhost:8000/single-post.php?id=' . $postId);
}
