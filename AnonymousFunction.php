<?php

$sayHello = function(string $name) {
  echo "Hello, $name" . PHP_EOL;
};

$sayHello("Dickri");


function sayGoodBye(string $name, $filter) {
  $finalName = $filter($name);
  echo "GoodBye, $finalName" . PHP_EOL;
}

sayGoodBye("Dickri", function(string $name): string {
  return strtoupper($name);
});

$filterFunction = function(string $name): string {
  return strtoupper($name);
};

sayGoodBye("Dickri", $filterFunction);

$firstName = "Dickri";
$lastName = "Dirgama";

$sayHelloDickri = function() use ($firstName, $lastName) {
    echo "Hello, $firstName $lastName" . PHP_EOL;
};


$sayHelloDickri();
 ?>
