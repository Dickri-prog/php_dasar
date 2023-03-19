<?php

$nilai = "C";

switch ($nilai) {
  case 'A':
    echo "Anda Lulus dengan sangat baik" . PHP_EOL;
    break;
  case 'B':
  case 'C':
    echo "Anda Lulus" . PHP_EOL;
    break;
  case 'D':
    echo "Anda Tidak lulus" . PHP_EOL;
    break;
  default:
    echo "Mungkin anda salah jurusan" . PHP_EOL;
    break;
}

 ?>
