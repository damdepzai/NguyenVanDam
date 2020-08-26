<?php

$arr = [10, 11, 2, 4,1,5,6,7,33,32,12];
function getMinDistance($arr)
{
    $leng = count($arr);
    if($arr[0] > $arr[1]) {
        $min = $arr[1];
        $min2 = $arr[0];
    } else {
        $min = $arr[0];
        $min2 = $arr[1];
    }
    for ($i = 2; $i < $leng; $i++) {
        if($arr[$i] < 0) {
            continue;
        }
        if ($arr[$i] < $min ) {
            $min2 = $min;
            $min = $arr[$i];

        } else if( $arr[$i] < $min2 ) {
            $min2 = $arr[$i];
        }
    }
    return $min2 - $min;
}

function getArray($arr) {
    $leng = count($arr);
    $newArray = [];
    $minDistance =  getMinDistance($arr);
    for($i = 0; $i < $leng - 1; $i++) {
        for ($j = $i+1 ; $j < $leng; $j++) {
            if (abs($arr[$i] - $arr[$j]) == $minDistance) {
                $newArray[] = ($arr[$i] > $arr[$j]) ? [$arr[$j], $arr[$i]] : [$arr[$i], $arr[$j]];
            }
        }
    }
    return $newArray;
}

print_r(getArray($arr));

