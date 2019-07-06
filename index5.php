<?php 

$col = 0;
$first = ' Яблоко';
$second = ' Яблока';
$thrid = ' Яблок';

function slov($num, $first, $second, $thrid) {
  switch ($num) {
    case 0: {
      return "0 яблок не может быть!";
      break;
    }
    case 1: {
      return $num . $first;
      break;
    }

    case 2: case 3: case 4: {
      return $num . $second;
    }

    default: {
      return $num . $thrid;
    }
  }
}

echo slov($col, $first, $second, $thrid) . "\n";

 ?>