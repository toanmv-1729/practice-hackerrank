<?php

function repeatedString($s, $n) {
    $firstCharacter = 'a';
    $countStr = substr_count($s, $firstCharacter);
    if ($n % strlen($s) === 0) {
        $count = $countStr * floor($n/strlen($s));
    } else {
        $subStr = substr($s, 0, $n % strlen($s));
        $countPlus = substr_count($subStr, $firstCharacter);
        $count = $countStr * floor($n/strlen($s)) + $countPlus;
    }

    return $count;
}
