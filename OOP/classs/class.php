<?php

class Person {

    public $id;
    public $username; 
    public $email;
    public $password;
    
    // constructor
    public function __construct($id, $username, $email, $password)
    {
        $this->id = $id;;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

}

$person = new Person(1, 'baba', 'baba@gmail.com', '');

echo "ID: " . $person->id . "<br>";
echo "Username: " . $person->username . "<br>";
echo "Email: " . $person->email . "<br>";
echo "Password: " . $person->password . "<br>";



?>