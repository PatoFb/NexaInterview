<?php

function generateRandom(int $size): array {
    $randomNumbers = [];
    for ($i = 0; $i < $size; $i++) {
        $randomNumber = rand(1, 100);
        $randomNumbers[] = $randomNumber;
    }
    return $randomNumbers;
}

function sum_array(array $array, int $size, int $initialSize) {
    if(sizeof($array) > 0) {
        $newNumbers = [];
        if(sizeof($array) != $initialSize) {
            for ($i = 0; $i < ($initialSize - sizeof($array))*3; $i++) {
                echo " ";
            }
        }
        foreach($array as $a){
            echo $a . "     ";
        }
        for ($i = 1; $i < sizeof($array); $i++) {
            $sum = $array[$i - 1] + $array[$i];
            $newNumbers[] = $sum;
        }
        echo "\n";
        sum_array($newNumbers, sizeof($newNumbers), $initialSize);
    }
}

$size = 10;
$randomNumbers = generateRandom($size);
sum_array($randomNumbers, $size, $size);
?>