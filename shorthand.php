<?php
    $loggedIn = false;
    $nums = [2,4,3,2,1];

    // if($loggedIn){
    //     echo "You are Logged In";
    // } else {
    //     echo "You are not logged in!";
    // }

    # Ternary
    $out = $loggedIn ?  "You are logged in!" : "You are not logged in!";
    // echo $out;
    // echo  $loggedIn ?  "You are logged in!" : "You are not logged in!";

    $isRegister = ($loggedIn === true) ? true : false;
    // echo $isRegister;

    $age = 2;
    $score = 15;

    // Nesting ternary operator
    // echo 'Your score is: ' .($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional') : ($age > 10 ? 'Horrible': 'Average'));

?>
<!-- We can do in two way -->

<div>
    <?php if($loggedIn){ ?>
        <h1>Welcome User</h1>
    <?php } else { ?>
        <h1>Welcome Guest</h1>
    <?php }?>
</div>


<div>
    <?php if($loggedIn):; ?>
        <h1>Welcome User</h1>
    <?php  else:  ?>
        <h1>Welcome Guest</h1>
    <?php endif; ?>
</div>

<div>
    <?php foreach ($nums as $value): ?>
        <b><?php echo $value; ?></b>
    <?php endforeach; ?>
</div>
