<?php
function cekData($number=false){
    return ($number % 2) ? false : true;
}

function parityOutlier($array){
    $countOdd = 0;
    $countEven = 0;

    for ($i=0; $i < count($array); $i++) { 
        if(cekData($array[$i])) {
            $even=$i;
            $countEven++;
        }else{
            $odd=$i;
            $countOdd++;
        }
    }

    if ($countOdd == 1){
        return $array[$odd].' (the only odd number)';
    } elseif ($countEven == 1) {
        return $array[$even].' (the only even number)';
    } else {
        return 'false (all odd integer, no outlier)'; 
    }
}

echo parityOutlier([2,4,0,100,4,11,26,02,36]);
echo parityOutlier([160,3,1719,19,11,13,-21]);
echo parityOutlier([11,13,15,19,9,13,-21]);
;?>