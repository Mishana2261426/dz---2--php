<?php 

$array = [];

for ($i=0; $i < 50; $i++) { 
  $array[] = mt_rand(0,1000000);
}

var_dump($array);

foreach ($array as $key => $value) {

  $num = str_split($value);
  if ($num[0] + $num[1] + $num[2] == $num[3] + $num[4] + $num[5]) {
    print_r($value);
    echo "\n";
  }
}

 ?>