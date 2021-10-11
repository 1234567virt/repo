<?php
$hour=171;
    $time['Часы']=(int) (intdiv($hour , 30))+0;
    $time['Минуты']=(int) ($hour / 30 * 60 % 60)+0;
    $time['Секунды']=(int) ($hour * 3600 /30 % 60)+0;
     print $time['Минуты'];
  
?>