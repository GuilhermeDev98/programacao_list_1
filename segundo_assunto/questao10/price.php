<?php

$kgStrawberry = $_GET['kgStrawberry'];
$kgApple = $_GET['kgApple'];


if($kgStrawberry <= 5){
    $totalStrawberry = $kgStrawberry * 2.50;
}else{
    $totalStrawberry = $kgStrawberry * 2.20;
}

if($kgApple <= 5){
    $totalApple = $kgApple * 1.80;
}else{
    $totalApple = $kgApple * 1.50;
}


$totalOfKg = $kgStrawberry + $kgApple;
$totalOfSale = $totalStrawberry + $totalApple;

if($totalOfKg > 8 | $totalOfSale > 25){
    $discount = 10 * ($totalOfSale / 100);
    $total = $totalOfSale - $discount;

    echo "Valor a ser pago R$ ".round($total, 2);
}else{
    echo "Valor a ser pago R$ ".round($totalOfSale, 2);
}