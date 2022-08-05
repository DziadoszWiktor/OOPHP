<?php

class Comment
{
    public $text;

    # You'll use constructors to do whatever should alway be done and done first when an object of this class is made
    public function __construct($text)
    {
        $this->text = $text;
    }

}

?>