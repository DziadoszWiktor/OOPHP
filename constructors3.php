<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require 'comment3.php';

        $comment = new Comment('1','This is a comment');

        echo $comment->userId;
        echo "<br><br>";
        echo $comment->text;
        echo "<p style='color:red;'>". $comment->userId ." ".$comment->text."</p>";
    ?>
    <br>
    <p style="color:pink;"><?php echo $comment->userId ?></p>
    <p style="color:pink;"><?php echo $comment->text ?></p>
</body>
</html>