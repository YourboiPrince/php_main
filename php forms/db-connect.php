<?php
// connect to the database
$database_connection = mysqli_connect('localhost', 'root', '', 'e-shop');

if ($database_connection->connect_error) {
    echo $database_connection->connect_error;
}
?>