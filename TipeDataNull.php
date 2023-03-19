<?php

$name = "Dickri";
$name = null;

$age = null;


echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";


echo "is_null function : ";
echo var_dump(is_null($name));
echo "\n";


$example = "Dickri";

unset($example);

var_dump(isset($example));


 ?>
