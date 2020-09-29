<?php

$nameOfProduct = $_GET['nameOfProduct'];
$priceOfProduct = $_GET['priceOfProduct'];
// o arroba suprime a informação de erro, mas não é uma boa prática.
@$paymentMethod = $_GET['paymentMethod'];


if($paymentMethod === 'inCash'){
    $discount = 5 * ( $priceOfProduct / 100);
    echo "Nome do Produto: ". $nameOfProduct. "<br/>";
    echo "Valor do Produto : R$ ". round($priceOfProduct - $discount, 2);
}else if($paymentMethod === 'forwardSale'){
    $interest = 2 * ( $priceOfProduct / 100);
    echo "Nome do Produto: ". $nameOfProduct. "<br/>";
    echo "Valor do Produto : R$ ". round($priceOfProduct + $interest, 2);
}else{
    echo "Nome do Produto: ". $nameOfProduct. "<br/>";
    echo "Valor do Produto : R$ ".$priceOfProduct;
}