<?php

function jumpingOnClouds($c) {
    $countJumps = 0;
    $nextCloud = 0;
    while ($nextCloud < array_key_last($c)) {
        $nextCloud = $nextCloud + 1;
        if (!array_key_exists($nextCloud + 1, $c)) {
            $countJumps++;
            break;
        }
        if ($c[$nextCloud + 1] === 0) {
            $nextCloud = $nextCloud + 1;
        }
        $countJumps++;
    }

    return $countJumps;
}
