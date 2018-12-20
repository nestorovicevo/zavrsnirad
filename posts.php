<?php require 'partials/header.php'?>
<?php
    $posts = $postsDB->allPosts();
?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <?php foreach ($posts as $post) :?>
                <div class="blog-post">
                    <h2>
                        <a href= 'single-post.php?id=<?php echo $post->id ?>'class="blog-post-title"><?php echo $post->title?></a>
                    </h2>
                    <p class="blog-post-meta">
                        <?php echo $post->created_at ?> by <a href="#"><?php echo $post->author?></a>
                    </p>
                    <p>
                        <?php echo $post->body?>
                    </p>
                </div>
            <?php endforeach ?>
            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div>
        <?php require 'partials/side-bar.php';?>
    </div>
</main>
<?php require 'partials/footer.php';?>