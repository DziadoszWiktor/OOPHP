<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulation</title>
</head>
<body>
    <?php
    
    require 'bid6.php';
    
    $bid = new Bid();
    $bid->setBidAmount(4);
    ?>
    <p><?php echo 'the bid amount is '.$bid->getBidAmount(); ?></p>
</body>
</html>