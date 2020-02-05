<?php

$ToGive = intval($argv[1]);
define("GELDSOORT", [50,20,10,5,2,1]);
$RestToGive = $ToGive;
if($ToGive != 0){
foreach(GELDSOORT as $geldeenheid){
    if($RestToGive >= $geldeenheid){
        $HowFit = floor($RestToGive/$geldeenheid);
        $RestToGive = $RestToGive % $geldeenheid;
        echo($HowFit . " x " . $geldeenheid . " euros" . PHP_EOL);
    }
}
}
?>

