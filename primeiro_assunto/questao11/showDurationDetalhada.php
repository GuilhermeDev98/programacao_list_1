<?php

$eventDuration = $_GET['eventDuration'];

$hours = floor($eventDuration / 3600);
$minutes = floor(($eventDuration - ($hours * 3600)) / 60);
$seconds = floor($eventDuration % 60);

echo "O evento durou ".$hours." Horas, ".$minutes." Minutos e ".$seconds." Segundos";