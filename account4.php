<?php

#Intheritance / Dziedziczenie
# Bank Account OOP implementation
class Account 
{
    public $accountNumber;
    public $balance;

    public function __construct($accountNumber,$balance)
    {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }

    public function deposit($amount) {
        #$finalAmount = $this->balance + $amount;
        #echo 'Depositing '. $finalAmount .'<br>';
        $this->balance + $amount;
        echo 'Depositing '. $amount .'<br>';
    }

    #wypłata
    public function withdraw($amount) {
        echo 'Withdrawing
         '. $amount .'<br>';
    }

    public function getBalance() {
        return $this->balance;
    }
}

?>