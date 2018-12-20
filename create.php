<?php require 'partials/header.php'?>
<?php
    require 'connectToDB/connection.php';
    require 'connectToDB/postsDB.php';

    $postId = (int)$_REQUEST['id'];
    $connection = Connection::make('127.0.0.1', 'blog', 'root', 'root');
    $postsDB = new PostsDB($connection);

?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">

        <form action="create-post.php" method="POST">
            <label for="name">Author:</label><br>
            <input type="text" class="" id="name" name="name" /><br>

            <label for="name">Title:</label><br>
            <input type="text" class="" id="name" name="title" /><br>

            <label for="name">Your text:</label><br>
            <textarea rows="10" cols="50" name="post" form="usrform">Enter text here...</textarea><br>

            <input type=date step=7 min=2014-09-08 name='date'><br>

            <input type="submit" value="Submit" name="save"/>
        </form>

        </div><!-- /.blog-main -->

        <?php require 'partials/side-bar.php'?>
    </div><!-- /.row -->
</main><!-- /.container -->
<?php require 'partials/footer.php'?>