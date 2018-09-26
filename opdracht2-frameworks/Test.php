<?php
include "Person.php";

$joey = new Person('joey','schmitz');
//$joey->firstname = 'joey';
//$joey->lastname = 'schmitz';


echo 'Hallo ' . strtoupper($joey->getFullname() . "\n\n");
//echo 'hallo ' . $joey->getFullname() . "\n";