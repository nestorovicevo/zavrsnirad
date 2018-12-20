<?php
    // require 'connectToDB/connection.php';
    // require 'connectToDB/postsDB.php';


    $connection = Connection::make('127.0.0.1', 'blog', 'root', 'vivify');
    $postsDB = new PostsDB($connection);
    $posts = $postsDB->latest();
?>

<aside class="col-sm-3 ml-sm-auto blog-sidebar">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Latest posts</h4>

            <div class="sidebar-module">

                <ol class="list-unstyled">
                    <?php foreach ($posts as $post) {
    ?>

                    <li><a href='single-post.php?id=<?php echo $post->id ?>'><?php echo $post->title ?></a></li>
                    <hr>
                    <?php
} ?>
                </ol>
            </div>

        </aside><!-- /.blog-sidebar -->