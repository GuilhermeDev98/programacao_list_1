<?php

$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];
$thirdNumber = $_GET['thirdNumber'];
$order = [];

if($firstNumber < $secondNumber && $firstNumber < $thirdNumber){
    if($secondNumber < $thirdNumber){
        echo $thirdNumber." ".$secondNumber." ". $firstNumber;
    }else{
        echo $secondNumber." ".$thirdNumber." ". $firstNumber;
    }
}elseif($secondNumber < $firstNumber && $secondNumber < $thirdNumber){
    if($firstNumber < $thirdNumber){
        echo $thirdNumber." ".$firstNumber." ". $secondNumber;
    }else{
        echo $firstNumber." ".$thirdNumber." ". $secondNumber;
    }
}elseif($thirdNumber < $firstNumber && $thirdNumber < $secondNumber){
    echo $secondNumber." ".$firstNumber." ". $thirdNumber;

}