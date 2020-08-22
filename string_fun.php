<?php
    # substr(): It function returns aportion of a string by specifies begin and end

    $output = substr("Hello", 1);
    $output = substr("Hello", 1, 3);
    $output = substr("Hello", -2);

    # srtlen: Return length of string.
    $output = strlen("Hello");

    # sttrpos: Find position of the first occurance of string
    $output = strpos("Hello", 'o');

    # strrpos(): Find last occurance
    $output = strrpos("Hello", 'l');

    # trim(): Strip whitespace if useful for form
    $output = 'Hello World        ';
    // var_dump(trim($output));

    # strtoupper | strtolower | ucwords
    $output = strtoupper('Hello World');
    $output = ucwords('hello world again!');

    # str_replace: replace all occurance
    $text ='Hello World';
    $output = str_replace('Hello', 'Hi', $text);

    # is_string(): return 1 or 0
    $output =is_string('Hello World');

    $values = [true, 22, 'mine', false, null, '', '22.4', 'avs', '0', 0, ' '];

    // foreach($values as $value){
    //     if(is_string($value)){
    //         echo "{$value} is string<br>";
    //     } else {
    //         echo "{$value} is not string<br>";
    //     }
    // }

    #gzcompress(): compress string
    $string = "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).";
    $output = gzcompress($string);

    $output = gzuncompress($output);

    echo $output;


?>
