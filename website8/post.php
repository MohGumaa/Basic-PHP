<?php
    require('config/config.php');
    require('config/db.php');

    if(isset($_POST['delete'])) {
        $delete_id = mysqli_real_escape_string($conn,$_POST['delete_id']);


        $query = "DELETE FROM posts WHERE id = {$delete_id}";

        if(mysqli_query($conn, $query)){
            header('Location: '.ROOT_URL.'');
        } else {
            echo "ERROR:" .mysqli_error($conn);
        }
    }




    // Get ID
    $id = mysqli_real_escape_string($conn,$_GET['id']);

    // Create Query
    $query = 'SELECT * FROM posts WHERE id='. $id;

    // Get Result
    $result = mysqli_query($conn, $query);

    // Fetch Data
    $post = mysqli_fetch_assoc($result);
    // var_dump($posts);

    // Free Result
    mysqli_free_result($result);

    // Close Coneection
    mysqli_close($conn);
?>
<?php include('inc/header.php'); ?>
    <div class="container">
        <a class="btn btn-default" href="<?php echo ROOT_URL; ?>">Back</a>
        <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at'];?> by<?php echo $post['author'];?></small>
        <hr>
        <p><?php echo $post['body'];?></p>
        <hr>
        <a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="float-left">
            <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
            <button class="btn btn-outline-danger" name="delete">Delete</button>
        </form>
        </div>

    </div>
<?php include('inc/footer.php'); ?>
