<?php

function mostraSequenza($start, $end, $salta){
    for ($i = $start; $i<= $end; $i++){
        if ($i === $salta){
            continue;
        }
        echo $i . " ";
    }
    
    echo "\n";
}