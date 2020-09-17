<?php

$firstPrice = $_GET['firstPrice'];
$secondPrice = $_GET['secondPrice'];
$thirdPrice = $_GET['thirdPrice'];

if($firstPrice < $secondPrice && $firstPrice < $thirdPrice){
    echo "Você tem que comprar o produto que custa R$".$firstPrice;
}
if($secondPrice < $firstPrice && $secondPrice < $thirdPrice){
    echo "Você tem que comprar o produto que custa R$".$secondPrice;
}
if($thirdPrice < $firstPrice && $thirdPrice < $secondPrice){
    echo "Você tem que comprar o produto que custa R$".$thirdPrice;
}