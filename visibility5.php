<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visibility</title>
</head>
<body>
    <?php
    
    require 'fileReader5.php';
    #require 'csvFileReader5.php';

    $fileReader = new FileReader();
    #$fileReader = new CSVFileReader();
    
    ?>

    <p><?php echo $fileReader->getData(); ?></p>
</body>
</html>