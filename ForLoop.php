<?php

for ($counter=0; $counter <= 10; $counter++) {
    echo "The Number Is $counter" . PHP_EOL;
}

echo "". PHP_EOL;

for ($counter=10; $counter >= 1 ; $counter--) {
  echo "The Number Is $counter" . PHP_EOL;
}


for ($counter=0; $counter <= 10; $counter++) :
    echo "The Number Is $counter" . PHP_EOL;
endfor;

echo "". PHP_EOL;

for ($counter=10; $counter >= 1 ; $counter--) :
  echo "The Number Is $counter" . PHP_EOL;
endfor;

 ?>
