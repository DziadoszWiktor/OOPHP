<?php

class User
{
    # Properties (public/protected/private)
    public $name;
    public $username;
    public $followerCounter;

}

# Creating a new User object
$wiktorObject = new User();
# Setting properties of the Object
$wiktorObject->name = "Wiktor";
$wiktorObject->username = "@wik";
$wiktorObject->followerCounter = 800;

print_r($wiktorObject);
?>