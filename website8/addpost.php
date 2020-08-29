<?php
    require('config/config.php');
    require('config/db.php');

    // Check For Submit
    if (isset($_POST['submit'])) {
        $title = mysqli_real_escape_string($conn,$_POST['title']);
        $author = mysqli_real_escape_string($conn,$_POST['author']);
        $body = mysqli_real_escape_string($conn,$_POST['body']);

        $query = "INSERT INTO posts(title,author,body) VALUES('$title', '$author', '$body')";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo "ERROR:" .mysqli_error($conn);
        }
    }
?>
    <?php include('inc/header.php'); ?>
    <div class="container">
        <h1>Add Posts</h1>
        <hr>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Author</label>
                <input type="text" name="author" class="form-control">
            </div>
            <div class="form-group">
                <label>Body</label>
                <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <button class="btn btn-outline-info" name="submit">Submit</button>
        </form>
    </div>
    <?php include('inc/footer.php'); ?>

