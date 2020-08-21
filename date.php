<?php
    // echo date('d') . "<br>";
    // echo date('m') . "<br>";
    // echo date('Y') . "<br>";
    // echo date('l') . "<br>";
    echo date('l:d/m/y') . "<br>";


    # Time
    // echo date('h') . "<br>";
    // echo date('i') . "<br>";
    // echo date('s') . "<br>";
    // echo date('a') . "<br>"; //AM or PM

    // Define timezone by SetTime Zone
    date_default_timezone_set('Asia/Calcutta');
    echo date('h:i:sa') . "<br>";

    // Make Date and time
    $timestamp = mktime(10, 1,9, 9, 19, 1981);

    /*
        - Will Return unix Timestamp is long integer containing the number if seconds
        between the Unix 1970 till specific date
    */
    // echo $timestamp;
    // echo date('m/d/y',$timestamp). "<br>";
    // echo date('m/d/y h:i:sa',$timestamp). "<br>";

    $timestamp2 = strtotime("7:00pm March 22 2020");
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    // Here we can specifiy day or months or year
    $timestamp5 = strtotime('+2 Months');


    echo date('m/d/y h:i:sa',$timestamp5)."<br>";

?>
