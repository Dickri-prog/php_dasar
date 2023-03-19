<?php

function sum(int $first, int $last): int {
  $total = $first + $last;
  return $total;
}


$total = sum(10, 100);

var_dump($total);

$total = sum(200, 2000.000);

var_dump($total);



function getFinalValue(int $value): string {
  if ($value >= 80) {
    return "A";
  }else if ($value >= 70){
    return "B";
  }else if($value >= 60){
    return "C";
  }else if ($value >= 50) {
    return "D";
  }else {
    return "E";
  }


  return "Ups.." . PHP_EOL;
}

$result = getFinalValue(80);

var_dump($result);

 ?>
