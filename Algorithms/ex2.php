<?php
$array = [1,3,3,3,1,5];
$uniques = [];
foreach ($array as $a) {
 	if(!in_array($a, $uniques)) {
      $uniques[] = $a;
    } 
}
print_r($uniques)
?>