<?php include 'server-info.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>System Info</title>
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach ($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>:</strong>
                        <?php echo $value?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <hr>
        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
                <?php foreach ($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>:</strong>
                        <?php echo $value?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
