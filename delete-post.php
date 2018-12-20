
<?php
require 'connectToDB/connectionConfig.php';
require 'connectToDB/connection.php';
require 'connectToDB/postsDB.php';

$postId = $_REQUEST['id'];

$connection = Connection::make($servername, $dbname, $username, $password);
$postsDB = new PostsDB($connection);
$postsDB->delete($postId);

header('Location: http://localhost:8000/posts.php');
