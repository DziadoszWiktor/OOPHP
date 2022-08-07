<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstarct Classes</title>
</head>
<body>
    <?php
    
    #require 'dataModel10.php';
    #require 'product10.php';
    require 'user10.php';

    $user = new User();
    $user->save();

    #$product = new Product();
    #$product->save();

    #$dataModel = new DataModel();
    #$dataModel->save();
    
    ?>
</body>
</html>