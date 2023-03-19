<?php

echo 'Single Quote';
echo "\n";
echo 'Name : ';
echo 'Dickri Dirgama';
echo "\n";

echo "Double Quote";
echo "\n";
echo "Name : ";
echo "Dickri\t Dirgama\t Alghifari\n";
echo "\n";

echo "Heredoc";
echo "\n";
echo <<<DICKRI
  This is example String with Heredoc then using "Double Quote" too
DICKRI;
echo "\n";

echo "Nowdoc";
echo "\n";
echo<<<'DICKRI'
  This is example String with Nowdoc then using "Double Quote" too
DICKRI;

 ?>
