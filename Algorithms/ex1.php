<?php
$array = [1,2,1,3,2,4,2,3,3,1,3,3];
$number = 9;
$bool = false;
foreach ($array as $key => $a) {
 	if($number == $a) {
      echo $key;
      $bool = true;
      break;
    } 
}
if(!$bool){
  echo -1;
}
?>