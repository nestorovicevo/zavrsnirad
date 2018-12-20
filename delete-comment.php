
<?php
require 'connectToDB/connectionConfig.php';
require 'connectToDB/connection.php';
require 'connectToDB/commentsDB.php';

$commentId = $_REQUEST['id'];
$postId = $_REQUEST['post_id'];

$connection = Connection::make($servername, $dbname, $username, $password);
$commentsDB = new CommentsDB($connection);
$commentsDB->delete($commentId);

header('Location: http://localhost:8000/single-post.php?id=' . $postId);
