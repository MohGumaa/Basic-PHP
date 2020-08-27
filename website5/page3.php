<?php
    $user = ['name' => 'Smith', 'email' => 'test@demo.com', 'age' => 35];

    // Here we can user serilaize
    $user = serialize($user);
    // echo $user;
    // echo "<br>";
    // var_dump($user);
    // echo "<br>";
    // print_r($user);

    setcookie('user', $user, time() + 36000);

    // To get value we need to serialize if we donet will get illege error string offset
    // $user = unserialize($_COOKIE['user']);
    // echo $user['name'];

?>
