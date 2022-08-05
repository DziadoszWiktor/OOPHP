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
        #require 'account4.php';
        #require 'checkingAccount4.php';
        require 'premiumCheckingAccount4.php';

        /*
        #$account1 = new Account("1ABCDE",120.00);
        $account1 = new CheckingAccount("1ABCDE",120.00);
        $account1->deposit(20.00);
        $account1->withdraw(10.00);
        $account1->transfer(30.00);
        echo $account1->getBalance();*/

        $premiumAccount1 = new premiumCheckingAccount("1ABCDE",120.00);
        echo $premiumAccount1->minBalance . '<br>';
        
        $premiumAccount1->deposit(20.00);
        $premiumAccount1->withdraw(10.00);
        $premiumAccount1->transfer(30.00);
        echo $premiumAccount1->getBalance();

    ?>
</body>
</html>