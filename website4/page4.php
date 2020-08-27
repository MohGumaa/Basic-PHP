<?php
    session_start();
    unset($_SESSION['name']);
    $email = $_SESSION['email'];
    print_r($_SESSION)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
</head>
<body>
    <h1>Hello <?php echo $name;?></h1>
    <h1>Hello <?php echo $email;?></h1>
</body>
</html>
