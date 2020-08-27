<?php
    if (isset($_POST['submit'])){
        $name = htmlentities($_POST['name']);

        setcookie('username', $name, time() + 3600);

        header('Location: page2.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="text" name="name" placeholder="Enter Your name">
        <button name="submit">Submit</button>
    </form>
</body>
</html>
