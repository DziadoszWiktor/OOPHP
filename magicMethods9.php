<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magic Methods</title>
</head>
<body>
    <?php

    require 'connection9.php';
    
    $connection1 = new Connection();
    $connection1->setConnectionId('127.0.0.1');
    # we can print this method thanks to __toString magic method
    print $connection1
    # test for invalid IP
    #$connection1->setConnectionId('ss');

    #$connection2 = new Connection();
    #$connection3 = new Connection();
    #unset($connection2);
    #unset($connection3);

    ?>

    <p><?php echo "Connection number: ". $connection1->getCount() ?></p>
    <p><?php echo "The conference ID is : ". $connection1->conferenceId ?></p>
    <p><?php echo "The connection ID is : ". $connection1->connectionId ?></p>
</body>
</html>