<?php

$balance = $_GET['balance'];
$percentage = ((3/100) * $balance);
$newBalance = $balance + $percentage;

echo "Se novo saldo é de R$ ".$newBalance;