
<?php
require 'connectToDB/connectionConfig.php';
require 'connectToDB/connection.php';
require 'connectToDB/postsDB.php';

if ($_POST['author'] && $_POST['body'] && $_POST['title']) {
    $author = $_POST['author'];
    $body = $_POST['body'];
    $title = $_POST['title'];
    $createdAt = date('Y-m-d H:i:s');

    $connection = Connection::make($servername, $dbname, $username, $password);
    $postsDB = new PostsDB($connection);
    $postsDB->create($title, $body, $author, $createdAt);

    header('Location: http://localhost:8000/posts.php');
}
