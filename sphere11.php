<?php

require 'threeDimensionalShape11.php';

class Sphere extends ThreeDimensionalShape
{
    public function volume(): float
    {
        #return pi()*pow($this->dimensions['radius'],2)* $this->dimensions['height'];
        return 4/3*(pi()*pow($this->dimensions['radius'],3));
    }
}

?>