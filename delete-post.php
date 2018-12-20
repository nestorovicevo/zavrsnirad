
<?php
    require 'connectToDB/connection.php';
    require 'connectToDB/postsDB.php';

    $postId = $_REQUEST['id'];

    $connection = Connection::make('127.0.0.1', 'blog', 'root', 'vivify');
    $postsDB = new PostsDB($connection);
    $postsDB->delete($postId);

    header('Location: http://localhost:8000/posts.php');
