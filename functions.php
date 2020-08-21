<?php
    echo "<h1>Fucntion: is block of code the can be repeatedly called.</h1><hr>";
    echo "<br>";

    function msg(){
        echo "Hello world";
    }
    // msg();

    // Function with args
    function printMsg($value="World"){
        echo "Hello $value";
        echo "<br>";
    }

    // printMsg("Adam");
    // printMsg();

    // Function with return value
    function AddNum($n1, $n2) {
        return $n1 + $n2;
    }

    // echo AddNum(5,7);

    // Pass by reference
    $num = 6;
    function multiFive(&$n) {
        return $n *= 5;
    }

    echo multiFive($num);
    echo "$num";

?>
