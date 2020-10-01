<?php

$sideOne = $_GET['sideOne'];
$sideTwo = $_GET['sideTwo'];
$sideThree = $_GET['sideThree'];

$sumOfTwoSides = $sideOne + $sideTwo;

if($sumOfTwoSides > $sideThree){
    echo "Com as medidas informadas, foi encontrado um Triângulo ";
    if ($sideOne == $sideTwo and $sideOne == $sideThree){
        echo "Equilátero !";
    }
    else if ($sideOne == $sideTwo or $sideTwo == $sideThree or $sideThree == $sideOne) {
        echo "Isósceles !";
    }else{
        echo "Escaleno !";           
    }   
}else{
    echo "As medidads informadas não formam um triângulo !";
}