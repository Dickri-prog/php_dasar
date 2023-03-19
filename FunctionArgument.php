<?php

function sayHello($firstName, $lastName = "") {
  echo "Hello $firstName $lastName" . PHP_EOL;
}

sayHello("Dickri");
sayHello("Barkah");
sayHello("Dickri", "Dirgama");



function sum(int $first, int $last) {
  $total = $first + $last;

  echo "total $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "200");
// sum(true, false);

function arrayFunc(array $array) {
  var_dump($array);
}

arrayFunc(["dickri"]);
// arrayFunc("dickri");



function sumAll(...$values) {
  $total = 0;

  foreach ($values as $value) {
    $total += $value;
  }

  echo "Total " . implode(',', $values) . " = $total" . PHP_EOL;
}

$values = [1,2,3,4];

sumAll(1,2,3,4);

sumAll(...$values);
 ?>
