<?php

$values = array(1,2,3,4, 5.6);

$values[] = 6.7;

unset($values[0]);

$values[0] = 1.2;

var_dump($values);
var_dump(count($values));


$names = ["Dickri", "Dirgama", "Al-ghifari"];

$names[] = "Sandi";

var_dump($names);


$dickri = array(
  "id" => "dickri",
  "name" => "Dickri Dirgama",
  "age" => 19,
  "address" => array(
    "city" => "Bandung",
    "country" => "Indonesia"
  )
);

var_dump($dickri);

var_dump($dickri["address"]["country"]);






 ?>
