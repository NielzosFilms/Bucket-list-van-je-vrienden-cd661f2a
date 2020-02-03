<?php

    echo("Hoeveel vrienden zal ik vragen om hun droom?".PHP_EOL);
    $count = readline();
    if(!is_numeric($count)){
        exit($count . " is geen nummer!");
    }
    $dromen = array();
    for($i=0;$i<$count;$i++){
        echo("Wat is jouw naam?".PHP_EOL);
        $naam = readline();
        echo("Wat is jouw droom?".PHP_EOL);
        $droom = readline();
        $dromen[$naam] = $droom;
    }
    foreach($dromen as $key => $val){
        echo($key. " Heeft als droom: ".$val);
    }

?>