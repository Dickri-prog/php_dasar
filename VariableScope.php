<?php

$name = "Dickri"; // Global Scope

function sayHello() {
  // Local Scope
  global $name; //Global keyword
  echo "Hello, $name";

  // echo "Hello, " . $GLOBALS['name'];
}


sayHello();

 ?>
