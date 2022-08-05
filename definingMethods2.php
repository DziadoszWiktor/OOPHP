<?php

class Basket
{
    public $itemsTotal;
    public $shippingCost;
    public $discount;

    public function calculateSubTotal(){
        return $this->itemsTotal + $this->shippingCost;
    }

    public function calculateDiscountedSubTotal(){
        return ($this->itemsTotal + $this->shippingCost)-($this->itemsTotal + $this->shippingCost)*($this->discount/100);
    }

}

$basket = new Basket();
$basket->itemsTotal = 50;
$basket->shippingCost = 10;
$basket->discount = 25;

#var_dump($basket)

echo "SubTotal: ".$basket->calculateSubTotal();
echo "<br><br>";
echo "DiscountedSubTotal: ".$basket->calculateDiscountedSubTotal();
?>