<?php

class DataModel {
    protected string $tableName = "My cool table";

    public function save() {
        print_r('Saving data to table '. $this->tableName);
    }

}

?>