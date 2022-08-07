<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract methods</title>
</head>
<body>
    <?php
    #require 'cylinder11.php';
    require 'sphere11.php';

    #$cylinder = new Cylinder(['radius'=>5, 'height'=>10]);
    #$cylinderVolume = $cylinder->volume();

    #print_r($cylinderVolume .PHP_EOL );

    $sphere = new Sphere(['radius'=>5]);
    $sphereVolume = $sphere->volume();

    print_r($sphereVolume .PHP_EOL );
    
    
    
    ?>
    
</body>
</html>