<?php
    session_start();
    $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
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
    <a href="page4.php">Go</a>
</body>
</html>
