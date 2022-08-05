<?php

require_once 'account4.php';

#keyword extends delcare inheritance
class CheckingAccount extends Account
{
    public function transfer($amount) {
        echo 'Transferring '.$amount.'<br>';
    }
}

?>