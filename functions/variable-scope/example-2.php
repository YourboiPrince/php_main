<?php

// global variable
$id = 5678;

function payment(){
    global $id;
    echo $id;
}

payment();