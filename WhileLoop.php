<?php

$counter = 1;

while($counter <= 10) {
  echo "The Number is $counter" . PHP_EOL;
  $counter++;
}

$counter = 10;

while($counter >= 1) :
  echo "The Number is $counter" . PHP_EOL;
  $counter--;
endwhile;


 ?>
