<?php

$names = ["Dickri", "Dirgama", "Al-ghifari"];

foreach ($names as $index => $name) {
  echo "Data ke $index = $name" . PHP_EOL;
}

$person = [
  "first_name" => "Dickri",
  "middle_name" => "Dirgama",
  "last_name" => "Al-ghifari"
];

foreach($person as $key => $value) {
  echo "Data $key = $value" . PHP_EOL;
}
 ?>
