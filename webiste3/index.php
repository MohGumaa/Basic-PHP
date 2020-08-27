<?php
    // Message vars
    $msg = '';
    $msgClass = '';

    // Check For submit
    if(filter_has_var(INPUT_POST, 'submit')){
        // Get Form Vars
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        // Check Required Fields
        if(!empty($name) && !empty($email) && !empty($message)){
            // Pass
            // Check email
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $msg = 'Please use a valid email';
                $msgClass = 'alert-danger';
            } else {
                // Send email
                $toEmail = 'gomaam14@gmail.com';
                $subject = 'Contact Request From' . $name;
                $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>
                ';

                // Email Headers
                $header = "MIME-Version: 1.0" . "\r\n";
                $header .="Contact-Type:text/html;charset=UTF-b" . "\r\n";

                $header .= "From:" .$name. "<" .$email. ">" . "\r\n";
                if(mail($toEmail, $subject, $body, $header)){
                    $msg = 'Your Email has been send.';
                    $msgClass = 'alert-success';
                } else {
                    $msg = 'Your Email has not beening send it.';
                    $msgClass = 'alert-danger';
                }
            }
        } else {
            // Faild
            $msg = 'Please fill all Filed';
            $msgClass = 'alert-danger';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF'] ?>">My Site</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : '';?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : '';?>">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : '';?></textarea>
            </div>
            <button class="btn btn-primary" name="submit">Send</button>
        </form>
    </div>
</body>
</html>
