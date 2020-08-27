<?php
    // setcookie('username', "John", time() - (86400 * 30));

    if(isset($_COOKIE['username'])){
        echo "User " . $_COOKIE['username'] ." is set <br>";
    } else {
        echo "Not set";
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
    <a href="page3.php">Go</a>
</body>
</html>
