<?php

$first = [
  "firstname" => "Dickri"
];

$last = [
  "firstname" => "Sandi",
  "lastname" => "Dirgama"
];

$full = $first + $last;

var_dump($full);



$first = [
  "firstname" =>"Dickri",
  "lastname" => "Dirgama"
];

$last = [
  "lastname" => "Dirgama",
  "firstname" => "Dickri",
];

var_dump($first == $last);
var_dump($first === $last);


$first = [
  "firstname" =>"Dickri",
  "lastname" => "Dirgama"
];

$last = [
  "lastname" => "Dirgama",
  "firstname" => "Dickri",
];

var_dump($first != $last);
var_dump($first !== $last);

 ?>
