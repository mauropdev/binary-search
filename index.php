<?php

function binarySearch($array, $arraySize, $value){
    $leftBound = 0;
    $rightBound = $arraySize - 1;

    while($leftBound < $rightBound){
        echo "un ciclo while.\n";
        $middle = (int)(($rightBound + $leftBound) / 2);

        if($array[$middle] == $value)
            return $middle;
        elseif($array[$middle] < $value)
            $leftBound = $middle + 1;
        else
            $rightBound = $middle - 1;
    }

    return -1;
}

function linealSearch($array, $arraySize, $value){

    for($i = 0; $i < $arraySize; $i++){
        echo "$i ciclo for.\n";
        if($array[$i] == $value)
            return $i;
    }
}

$array = [0,8,25,50,74,81,139,162,197,241,270,300,350,400,500,1000];

echo linealSearch($array, count($array), 400);
echo "\n";
echo binarySearch($array, count($array), 400);