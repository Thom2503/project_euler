<?php

  //Still Needs to be tested idk if this works, probably not because my pc won't compute to the 4.000.000 digits

  $max = 4000000;
  $sum = 0;
  $a = 1;
  $b = 1;

  while($a < 10)
  {
    if($a % 2 == 0)
    {
      $sum += $a;
    } else
    {
      $a = $a + $b;
      $b = $a;
    }
  }

  echo $sum;

?>
