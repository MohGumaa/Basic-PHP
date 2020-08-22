<?php
    # Check for GET or POST DATA [INPUT_POST, INPUT_GET]
    /*if(filter_has_var(INPUT_POST, 'data')){
        echo "Data Found";
    } else {
        echo "NOT Found";
    }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];

        // Remove illegal char
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        echo $email . '<br>';

        // Validate as email
        // if(filter_var(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email is Valid";
        } else {
            echo "Not Valid";
        }
    }

        #FILTER_VALIDATE_BOOLEAN
        #FILTER_VALIDATE_EMAIL
        #FILTER_VALIDATE_FLOAT
        #FILTER_VALIDATE_INT
        #FILTER_VALIDATE_IP
        #FILTER_VALIDATE_REGEXP
        #FILTER_VALIDATE_URL

        #FILTER_SANITIZE_EMAIL
        #FILTER_SANITIZE_ENCODED
        #FILTER_SANITIZE_NUMBER_FLOAT
        #FILTER_SANITIZE_NUMBER_INT
        #FILTER_SANITIZE_SPECIAL_CHARS
        #FILTER_SANITIZE_STRING
        #FILTER_SANITIZE_URL


    $var = '25';
    if(filter_var($var, FILTER_VALIDATE_INT)){
        echo $var. " is Number";
    } else {
        echo $var. " is Not Number";
    }

    */

    $number = '324klk2l342341kl1211';
    var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="data">
    <button>Submit</button>
</form>
