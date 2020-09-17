<?php

$valuePerHour =$_GET['valuePerHour'];
$workedHours = $_GET['workedHours'];
$salary = $valuePerHour * $workedHours;

echo "Seu salário no final do mês vai ser R$".$salary;