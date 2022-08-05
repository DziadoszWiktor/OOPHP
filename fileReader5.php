<?php

class FileReader 
{   
    # if 4data is public we can se the text on the browser with obj->data
    # if the data is protected we have to crate a new method "getData" and echo the obj->getData()
    # we have to remember that we can see the data in subclasses too, for exaple extending this method (we comment getData here for a while)
    # if the data is private we can only access it from $this
    private $data = 'Some random data';

    
    public function getData() {
        return $this->data;
    }
}


?>