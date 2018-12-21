<?php require 'partials/header.php'?>
<?php
    $postId = (int)$_REQUEST['id'];
    $singlePost = $postsDB->getById($postId);
    $singlePost->comments = $commentsDB->getByPostId($postId);
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <?php echo $singlePost->title;?>
                </h2>
                <p class="blog-post-meta">
                    <?php echo $singlePost->created_at;?> by <a href="#"><?php echo $singlePost->author;?></a>
                </p>
                <p>
                    <?php echo $singlePost->body?>
                </p>
                <a href='/delete-post.php?id=<?php echo $singlePost->id; ?>'>
                    <input type='button' class='btn btn-default' value='Delete this post' onClick="confirm('do you really want this')" value="click"/>
                </a>
            </div>
            <div id="respond">
                <h3>Leave a Comment</h3>
                <form name="comment-form" action="create-comment.php" onsubmit="return validateForm()" method="POST" >
                    <label for="name">Your Name:</label>
                    <input type="text" class=" alert alert-danger" id="name" name="name" required/><br>
                    <label for="name">Your Comment:</label><br>
                    <textarea id="comment" class=" alert alert-danger" name="comment" required></textarea><br>
                    <input type="hidden" name="post_id" value="<?php echo $postId?>"/>
                    <input type="submit" value="Send comment" name="save" onclick="validateForm()"/>
                </form>
                <br>
            </div>
            <button  onclick= 'myFunction()' id='myButton' class='btn btn-default'>
                Hide comments
            </button>
            <div id='comment-list'>
                <ul>
                    <?php foreach ($singlePost->comments as $comment) : ?>
                        <li>
                            <hr>
                            <p class='test'><?php echo $comment->author; ?></p>
                            <p class='test'><?php echo $comment->body; ?></p>
                            <a href='/delete-comment.php?id=<?php echo $comment->id; ?>&post_id=<?php echo $postId; ?>'>
                            <input type='button' class='btn btn-default' value='Delete'/></a>
                        </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
        <?php require 'partials/side-bar.php'?>
    </div>
</main>
<?php require 'partials/footer.php'?>