<?php

$counter = 1;

while (true) {
  echo "The number is $counter" . PHP_EOL;
  $counter++;

  if ($counter > 10) {
    break;
  }
}

 ?>
