<?php

class Connection 
{
    #we want to have in mind the number of connections
    #private beacuse we want to keep it inside of our code
    #static cause we need to keep the count and int cause yes
    private static int $count = 0;


    /**
     * @var string Connection Identifier
     */
    private string $connectionId;

    # (%lool here%)
    private int $conferenceId = 1234;

    public function __construct()
    {
        self::$count++;
    }

    # __destruct method allow us do unset($connection) a connecntion a decrease the counter
    public function __destruct()
    {
        self::$count--;
    }

    # (%lool here too%)
    /**
     * Used for reading data from private or protected properties
     */
    public function __get($name) {
        return $this->$name;
    }

    # Reaction fo the class when we decide to print the class or represent it as a string
    public function __toString()
    {
        return "Conference ID: {$this->conferenceId} <br> Connection ID: {$this->connectionId}";
    }


    public function getCount() {
        return self::$count;
    }

    public function setConnectionId($ipAddress) {
        #filter var is a function that return true or false for checking string like ip addresses or mail etc
        if (filter_var($ipAddress, FILTER_VALIDATE_IP)) {
            $this->connectionId = $ipAddress .'-'.self::$count;
            return;
        }

        # The die() is an inbuilt function in PHP. It is used to print message and exit from the current php script.
        die("Not a valid IP ");
    }

    # this is a getter for our private variable, nut if we need more getters we can do this: (%look up%)
    /*
    public function getConnectionId() {
        return $this->connectionId;
    }*/
}


?>