<?php

$workSector = $_GET['workSector'];
$workedHours = $_GET['workedHours'];

if($workSector === 'production'){
    $pricePerHour = 10;
    $salary = $pricePerHour * $workedHours;
    echo "Salário R$ ". $salary;
}else if($workSector === 'administrative'){
    $pricePerHour = 12;
    $salary = $pricePerHour * $workedHours;
    echo "Salário R$ ". $salary;
}else{
    echo "Não foi possível calcular o valor do salário!";
}