<?php

class Comment
{
    public $userId;
    public $text;

    # You'll use constructors to do whatever should alway be done and done first when an object of this class is made
    public function __construct($userId,$text)
    {
        $this->userId = $userId;
        $this->text = $text;
    }

}

?>