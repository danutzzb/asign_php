<?php
//$words = ["banana", "mar", "portocala", "gutuie"];
//$lenghts = array_map('strlen', $words);
//var_dump($lenghts);
//echo max($lenghts);
spl_autoload_register(function($class) {
require_once $class . '.php';   
});

$croco = new Crocodile();
$mia = new Cat();
$robi = new Robodog();

$greg = new PetOwner();
$greg->buyPet($mia);
$greg->buyPet($robi);
$greg->PlayWithPets();
