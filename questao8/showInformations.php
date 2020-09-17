<?php

$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];
$realNumber = $_GET['realNumber'];

$productOfDoubleMoreHalf = ($firstNumber * 2) * ($secondNumber/2);
$sumOfTriple = ($firstNumber*3) + $secondNumber;
$thirdCubed = $realNumber ** 3;

echo "O produto do dobro do primeiro com metade do segundo : ". $productOfDoubleMoreHalf."<br/>";
echo "A soma do triplo do primeiro com o terceiro: ".$sumOfTriple."<br/>";
echo "O terceiro elevado ao cubo: ". $thirdCubed."<br/>";