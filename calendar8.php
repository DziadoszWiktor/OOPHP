<?php

class Calendar 
{
    public $name;

    #zmienna globalna?
    # consts can have before specified visibilty (private, restricted, public)
    public const MONTHS = 12;

    public static $daysInFebrary = 28;

    # properties doesn't allow array merges f.e. but small operations yes (like $weeks = 365/7)
    # WE USE STATIC PROPERTIES WHEN WE HAVE A VALUE WICH WE WANT REMAIN THE SAME FOR ALL INSTANCES OF THAT 
    # we cane specify the type of the propery

    public static ?int $year = 30;
    
    public static $count;

    # class counter
    public function __construct()
    {
        self::$count++;
    }

    # when we use self on consts we dont need the dollar sign
    public function getMonths() {
        return self::MONTHS;
    }
}

$calendar = new Calendar();
$calendar->name = 'Year Planner';

$calendar2 = new Calendar();
$calendar2->name = 'Year Planner2';

#PHP_EOL -> \n
print $calendar->name . PHP_EOL;
#accessing the costant name troush nameOfClass::const
print Calendar::MONTHS . PHP_EOL;

echo $calendar->getMonths(). PHP_EOL;

#defining days in february
echo Calendar::$daysInFebrary . PHP_EOL;

#incrementing
Calendar::$daysInFebrary++;

echo $calendar::$daysInFebrary . PHP_EOL;

# we have two classes, at the moment of creation, class counter will increment the property $count of 1
print Calendar::$count . PHP_EOL;

# we can't assign a str value to property $year cause we specified must be an int
#Calendar::$year = "aa"; that does't work throwing type error
#Calendar::$year = 10; that work
# we assigned value 20 (original 30)
# if we put a ? mark before the type tha property can accept int value and none value too
Calendar::$year = 20;

print $calendar::$year;

?>