<?php

$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];
$quotient = $firstNumber / $secondNumber;
$remnant = $firstNumber % $secondNumber;


echo "Dividendo: ".$firstNumber. "<br/>";
echo "Divisor: ".$secondNumber. "<br/>";
echo "Quociente: ".$quotient. "<br/>";
echo "Resto: ".$remnant. "<br/>";

