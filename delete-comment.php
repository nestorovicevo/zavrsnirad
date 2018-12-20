
<?php
    require 'connectToDB/connection.php';
    require 'connectToDB/commentsDB.php';

    $commentId = $_REQUEST['id'];
    $postId = $_REQUEST['post_id'];

    $connection = Connection::make('127.0.0.1', 'blog', 'root', 'root');
    $commentsDB = new CommentsDB($connection);
    $commentsDB->delete($commentId);

    header('Location: http://localhost:8000/single-post.php?id=' . $postId);
