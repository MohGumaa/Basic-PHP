<?php
    $path = '/dir1/file1.php';
    $file = 'file.txt';

    /*
    // Return file name
    echo basename($path);

    // Return file name without extension
    echo basename($path, '.php');

    // Return the dir name from path
    // echo dirname($path);

    // Check if file exist return 1 or 0 also use for folder
    echo file_exists($file);

    // Get absoulte path
    echo realpath($file);

    // Check to see if file also we can use to folder
    echo is_file($file);

    // Check if file is writable or reable
    echo is_writable($file);
    echo is_readable($file);

    // Check size
    echo filesize($file);

    // Create Directory
    mkdir('testing');

    // Remove dir if empty
    rmdir('testing');

    // Copy file
    echo copy($file, 'file2.txt');

    // Rename file
    rename('file2.txt', 'file.txt');

    // Delete file
    unlink($file);

    // Write from file to string
    echo file_get_contents('file.txt');

    // Write string to file
    echo file_put_contents($file, 'Hello World');

    $current = file_get_contents($file);
    $current .= ' Goodby World!';
    file_put_contents($file, $current);

    // Open file for reading
    $handle = fopen($file, 'r');
    $data = fread($handle, filesize($file));
    echo $data;
    fclose($handle);
    */
    // Open file for Writing
    $handle = fopen('file2.txt', 'w');
    $txt = 'Smith John';
    fwrite($handle, $txt);
    fwrite($handle, "\nAdma John");
    fclose($handle);



?>
