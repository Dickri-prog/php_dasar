<?php

function sayHello(string $name, callable $filter) {
  $finalName = call_user_func($filter, $name);

  echo "Hello, $finalName" . PHP_EOL;

}


sayHello("Dickri", "strtoupper");
sayHello("Dickri", function(string $name): string {
  return strtoupper($name);
});
sayHello("Dickri", fn($name) => strtoupper($name));



 ?>
