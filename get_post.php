<?php

    if(isset($_GET['name'])){
       $name = htmlentities($_GET['name']);
       // echo $name;
        // print_r($_GET);
    }

    // if(($_SERVER['REQUEST_METHOD'] == 'POST') AND (isset($_REQUEST['email']))){
    //    $email = htmlentities($_REQUEST['email']);
    //    echo $email;
    //     // print_r($_POST);
    // }
    echo $_SERVER['QUERY_STRING'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My site</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="GET">
        <div class="">
            <label>Name</label><br>
            <input type="text" name="name">
        </div>
        <div class="">
            <label>Email</label><br>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?name=Brand" ?>">Brand</a></li>
        <li><a href="<?php echo $_SERVER['PHP_SELF']."?name=John" ?>">John</a></li>
    </ul>

    <h1><?php
        $name = (!empty($name)) ? "{$name}'s Profile" : null;
        echo $name;
     ?></h1>

</body>
</html>
