<?php
    echo "<h1>Array:</h1><hr>";
    echo "<p>It is variable that can hold mulitple values. IT has three type [ indexed, Associative, Multi-dimensional]</p>";
    $people = array('Smith', 'Doe', 'John');
    $cars = ['Honda', 'Ford'];
    $cars[] = 'BMW';
    print_r($people);
    echo "<br>";
    var_dump($cars)

?>
