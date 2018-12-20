<?php
    $posts = $postsDB->latest();
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4>Latest posts</h4>
        <div class="sidebar-module">
            <ol class="list-unstyled">
                <?php foreach ($posts as $post):?>
                    <li>
                        <a href='single-post.php?id=<?php echo $post->id ?>'>
                            <?php echo $post->title ?>
                        </a>
                    </li>
                    <hr>
                <?php endforeach ?>
            </ol>
        </div>
    </div>
</aside>