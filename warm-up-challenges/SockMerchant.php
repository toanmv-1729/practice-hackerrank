<?php

function sockMerchant($n, $ar) {
    $arCountValues = array_count_values($ar);
    $countSock = 0;
    foreach($arCountValues as $arCountValue) {
        $countSock = $countSock + floor($arCountValue/2);
    }
    return $countSock;
}
