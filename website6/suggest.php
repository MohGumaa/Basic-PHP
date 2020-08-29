<?php
    $people = ['Smith', 'John', 'Doe'];

    // Get Query
    $q = $_REQUEST['q'];

    $suggestion = '';

    // Get Suggestion

    if($q !== ''){
        $q = strtolower($q);
        $len = strlen($q);
        foreach ($people as $person) {
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ''){
                    $suggestion = $person;
                } else {
                    $suggestion .= ", $person";
                }
            }
        }
    }

echo $suggestion === '' ? "No suggestion: ($q)" : $suggestion;
?>
