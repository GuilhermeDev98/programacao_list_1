<?php

$firtNumber = $_GET['firtNumber'];
$secondNumber = $_GET['secondNumber'];

$isDivisible = $firtNumber % $secondNumber;

if($isDivisible === 0){
    echo $firtNumber." é divisível por ".$secondNumber;
}else{
    echo $firtNumber." não é divisível por ".$secondNumber;
}