<?php

$sideOne = $_GET['sideOne'];
$sideTwo = $_GET['sideTwo'];
$sideThree = $_GET['sideThree'];

$sumOfTwoSides = $sideOne + $sideTwo;

if($sumOfTwoSides > $sideThree){
    echo "Com as medidas informadas foi encontrado um Triângulo ";
    if(
        ($sideOne == $sideTwo && $sideOne == $sideThree) &&
        ($sideTwo == $sideOne && $sideTwo == $sideThree) &&
        ($sideThree == $sideOne && $sideThree == $sideTwo)
    ){
        echo "Equilátero";
    }

    if(
        ($sideOne == $sideTwo && $sideOne == $sideThree) ||
        ($sideTwo == $sideOne && $sideTwo == $sideThree) ||
        ($sideThree == $sideOne && $sideThree == $sideTwo)
    ){
        echo "Isósceles";
    }

    if(
        ($sideOne != $sideTwo && $sideOne != $sideThree) &&
        ($sideTwo != $sideOne && $sideTwo != $sideThree) &&
        ($sideThree != $sideOne && $sideThree != $sideTwo)
    ){
        echo "Escaleno";
    }
}else{
    echo "As medidads informadas não formam um triângulo !";
}