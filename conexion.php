<?php

$sqli = new mysqli("localhost", "root", "", "ucadb");

if($sqli-> connect_errno){
    echo "No se conecto a MySQL: (" . $mysqly->connect_errno . ")" . $mysqly->connect_error;
    }

?>

