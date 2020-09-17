<?php

$degreesInF = $_GET['degreesInF'];
$degressInCelsius = (5 * ($degreesInF-32) / 9);

echo "A temperatura é de ".$degressInCelsius."°";