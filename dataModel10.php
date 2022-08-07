<?php

# abstract class of a database table
# for creatinga specific type of table f.e. a product table we need to create a product class that extends the data model class

class DataModel {
    # we make it protected cause we want to be accessible from our subclass product
    protected string $tableName = "My cool table";

    public function save() {
        print_r('Saving data to table '. $this->tableName);
    }

}

?>