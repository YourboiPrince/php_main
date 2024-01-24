<?php

class Account {
    // properties
    public $account_name;
    public $account_number;

    public function __construct($account_number, $account_name)
    {
        $this->account_number = $account_number;
        $this->account_name = $account_name;
    }

    public function print_account_info() {
        echo "{$this->account_number} {$this->account_name}";
    }
}

class SavingsAccount extends Account {
    // SavingsAccount does not have an interest_rate property
}

class FixedAccount extends Account {
    public $interest_rate;

    public function __construct($account_number, $account_name, $interest_rate)
    {
        parent::__construct($account_number, $account_name); // inherit parent constructor
        $this->interest_rate = $interest_rate;
    }

    public function print_account_info() {
        parent::print_account_info();
        echo " Interest Rate: {$this->interest_rate}";
    }
}

$fixed_account = new FixedAccount(123456789012, "Papa Johnes", '1.5');
$fixed_account->print_account_info();
// echo "\n";

// $savings_account = new SavingsAccount(987654321098, "Mama Johns");
// $savings_account->print_account_info();
// echo "\n";

?>
