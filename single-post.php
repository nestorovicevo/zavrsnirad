<?php require 'partials/header.php'?>
<?php
    require 'connectToDB/connection.php';
    require 'connectToDB/postsDB.php';
    require 'connectToDB/commentsDB.php';

    $postId = (int)$_REQUEST['id'];
    $connection = Connection::make('127.0.0.1', 'blog', 'root', 'root');
    $postsDB = new PostsDB($connection);
    $singlePost = $postsDB->getById($postId);
    $commentsDB = new CommentsDB($connection);
    $singlePost->comments = $commentsDB->getByPostId($postId);
?>

<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
        <div class="blog-post">
            <h2 class="blog-post-title">
                <?php echo $singlePost->title;?>
            </h2>
            <p class="blog-post-meta"><?php echo $singlePost->created_at;?> by <a href="#"><?php echo $singlePost->author;?></a></p>

            <p><?php echo $singlePost->body?></p>
        </div>

        <div id="respond">

            <h3>Leave a Comment</h3>

            <form action="create-comment.php" method="POST">
                <label for="name">Your Name:</label>
                <input type="text" class=" alert alert-danger" id="name" name="name" />

                <label for="name">Your Comment:</label>
                <textarea id="comment" class=" alert alert-danger" name="comment"></textarea>

                <input type="hidden" name="post_id" value="<?php echo $postId?>"/>

                <input type="submit" value="Submit" name="save"/>
            </form>
        </div>

        <button  onclick= 'myFunction()' id='myButton' class='btn btn-default'>Hide comments</button>
        <div id='comment-list'>
        <ul>
            <?php foreach ($singlePost->comments as $comment) {
    ?>
               <li>
                   <hr>
                    <p class='test'><?php echo $comment->author; ?></p>
                    <p class='test'><?php echo $comment->body; ?></p>
                </li>
            <?php
}?>
        </ul>
        </div>
        </div><!-- /.blog-main -->

        <?php require 'partials/side-bar.php'?>
    </div><!-- /.row -->
</main><!-- /.container -->
<?php require 'partials/footer.php'?>