<?php

$valueInMeter = $_GET['valueInMeter'];
$valueInCentimeter = $valueInMeter * 100;

echo $valueInMeter." M corresponde a ".$valueInCentimeter." CM";