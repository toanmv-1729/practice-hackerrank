<?php

function countingValleys($n, $s) {
    $level = 0;
    $countValeys = 0;
    $arrayStr = str_split($s);
    foreach($arrayStr as $str) {
        if ($str === 'U') {
            $level++;
        }
        if ($str === 'D') {
            $level--;
        }
        if ($str === 'U' && $level === 0) {
            $countValeys++;
        }
    }
    return $countValeys;
}
