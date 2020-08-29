<?php
    // require('config/config.php');

    // Creatge Connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Check Connection
    if (mysqli_connect_errno()) {
        // Failed to connect
        echo "Faild to connect to MySQL" . mysqli_connect_errno();
    }
