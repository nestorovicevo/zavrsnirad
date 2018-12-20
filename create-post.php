
<?php
    require 'connectToDB/connection.php';
    require 'connectToDB/postsDB.php';

    if ($_POST['name'] && $_POST['post'] && $_POST['title'] && $_POST['date']) {
        $author = $_POST['name'];
        $body = $_POST['post'];
        $title = $_POST['title'];
        $createdAt = $_POST['date'];

        $connection = Connection::make('127.0.0.1', 'blog', 'root', 'root');
        $postsDB = new PostsDB($connection);
        $postsDB->create($title, $body, $author, $createdAt);

        header('Location: http://localhost:8000/posts.php');
    }
