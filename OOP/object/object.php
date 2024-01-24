<?php

class DatabaseConnection {
    // properties
    public $hostname = "localhost";
    public $username = "root";
    public $password = ""; 
    public $db_name = "e-shop";

    // method
    public function print_database_info() {
        echo  "Hostname : {$this->hostname}";
    }

}

// object
$database_connection = new DatabaseConnection();

// var_dump($database_connection);
// echo $database_connection->hostname;
$database_connection->print_database_info();



?>