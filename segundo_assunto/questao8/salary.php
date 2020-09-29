<?php

$valueOfSalary = $_GET['valueOfSalary'];


if($valueOfSalary < 280){
    $increasePercentage = 20;
    $increaseValue = $increasePercentage * ( $valueOfSalary / 100);
    $newSalary = $valueOfSalary + $increaseValue;
    echo "Salário antes do reajuste: R$ ". $valueOfSalary . "<br/>";
    echo "Percentual de aumento aplicado: ". $increasePercentage . "%<br/>";
    echo "Valor do aumento: R$ ". $increaseValue . "<br/>";
    echo "Novo salário: R$ ". $newSalary . "<br/>";
}else if($valueOfSalary >= 280 && $valueOfSalary < 700){
    $increasePercentage = 15;
    $increaseValue = $increasePercentage * ( $valueOfSalary / 100);
    $newSalary = $valueOfSalary + $increaseValue;
    echo "Salário antes do reajuste: R$ ". $valueOfSalary . "<br/>";
    echo "Percentual de aumento aplicado: ". $increasePercentage . "%<br/>";
    echo "Valor do aumento: R$ ". $increaseValue . "<br/>";
    echo "Novo salário: R$ ". $newSalary . "<br/>";
}else if($valueOfSalary >= 700 && $valueOfSalary < 1500){
    $increasePercentage = 10;
    $increaseValue = $increasePercentage * ( $valueOfSalary / 100);
    $newSalary = $valueOfSalary + $increaseValue;
    echo "Salário antes do reajuste: R$ ". $valueOfSalary . "<br/>";
    echo "Percentual de aumento aplicado: ". $increasePercentage . "%<br/>";
    echo "Valor do aumento: R$ ". $increaseValue . "<br/>";
    echo "Novo salário: R$ ". $newSalary . "<br/>";
}else if($valueOfSalary >= 1500){
    $increasePercentage = 5;
    $increaseValue = $increasePercentage * ( $valueOfSalary / 100);
    $newSalary = $valueOfSalary + $increaseValue;
    echo "Salário antes do reajuste: R$ ". $valueOfSalary . "<br/>";
    echo "Percentual de aumento aplicado: ". $increasePercentage . "%<br/>";
    echo "Valor do aumento: R$ ". $increaseValue . "<br/>";
    echo "Novo salário: R$ ". $newSalary . "<br/>";
}else{
    echo "Não foi possível identificar o aumento !";
}