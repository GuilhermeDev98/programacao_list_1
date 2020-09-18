<?php

$turn = $_GET['turn'];

if($turn === "M"){
    echo "Bom dia !";
}elseif($turn === "T"){
    echo "Boa Tarde !";
}elseif($turn === "N"){
    echo "Boa Noite !";
}else{
    echo "Valor Inválido!";
}