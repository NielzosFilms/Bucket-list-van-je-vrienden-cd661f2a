<?php

    echo("Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL);
    $count = readline();
    if(!is_numeric($count)){
        exit($count . " is geen nummer!");
    }
    $dromen = array();
    $namen = array();
    for($i=0;$i<$count;$i++){
        echo("Wat is jouw naam?".PHP_EOL);
        $naam = readline();
        echo("Wat is jouw droom?".PHP_EOL);
        $droom = readline();
        array_push($namen, $naam);
        $dromen[$naam] = $droom;
    }
    for($i=0;$i<count($dromen);$i++){
        $naam = $namen[$i];
        echo($naam." Heeft als droom: ".$dromen[$naam].PHP_EOL);
    }

?>