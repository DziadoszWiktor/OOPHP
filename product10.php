<?php

require_once 'dataModel10.php';

class Product extends DataModel
{
    private string $name;
    private float $price;
    # Overrifing - create properties in subclasses
    protected string $tableName = 'products';

    #setters
    public function setName(string $name) {
        $this->name = $name;
    }
    public function setPrice(float $price) {
        $this->price = $price;
    }
    #getters
    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
}


?>