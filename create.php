<?php require 'partials/header.php'?>
<main role="main" class="container">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <form name = "create-form" action="create-post.php" onsubmit="return validateCreateForm()" method="POST">
                <label>Author:</label><br>
                <input type="text" class="" id="name" name="author" reuqired/><br>
                <label>Title:</label><br>
                <input type="text" class="" id="name" name="title" required/><br>
                <label>Your text:</label><br>
                <textarea rows="10" cols="50" name="body" required>Enter text here...</textarea><br>
                <input type="submit" value="Submit" name="save" onclick="validateCreateForm()"/>
            </form>
        </div>
        <?php require 'partials/side-bar.php'?>
    </div>
</main>
<?php require 'partials/footer.php'?>