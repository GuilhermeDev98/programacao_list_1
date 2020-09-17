<?php

$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];
$thirdNumber = $_GET['thirdNumber'];

if($firstNumber > $secondNumber && $firstNumber > $thirdNumber){
    echo $firstNumber." é o maior número <br/>";
}
if($secondNumber > $firstNumber && $secondNumber > $thirdNumber){
    echo $secondNumber." é o maior número <br/>";
}
if($thirdNumber > $firstNumber && $thirdNumber > $secondNumber){
    echo $thirdNumber." é o maior número <br/>";
}


if($firstNumber < $secondNumber && $firstNumber < $thirdNumber){
    echo $firstNumber." é o menor número <br/>";
}
if($secondNumber < $firstNumber && $secondNumber < $thirdNumber){
    echo $secondNumber." é o menor número <br/>";
}
if($thirdNumber < $firstNumber && $thirdNumber < $secondNumber){
    echo $thirdNumber." é o menor número <br/>";
}