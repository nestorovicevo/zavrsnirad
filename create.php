<?php require 'partials/header.php'?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <form action="create-post.php" method="POST">
                <label>Author:</label><br>
                <input type="text" class="" id="name" name="author" /><br>
                <label>Title:</label><br>
                <input type="text" class="" id="name" name="title" /><br>
                <label>Your text:</label><br>
                <textarea rows="10" cols="50" name="body">Enter text here...</textarea><br>
                <input type="submit" value="Submit" name="save"/>
            </form>
        </div>
        <?php require 'partials/side-bar.php'?>
    </div>
</main>
<?php require 'partials/footer.php'?>