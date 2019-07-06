<?php 

$date =  mktime(0, 0, 0, 1, 1, 2020);
 $ndate = time();
 //echo date($nydate)."\n".$nowdate."\n";
 $newyear = round(($date - $ndate)/(3600*24)); // округляем и получаем количество полных дней.
 echo date($newyear . "- до нового года" . "\n");

 ?>