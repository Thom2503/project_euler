<?php
  //
  //The prime factors of 13195 are 5, 7, 13 and 29.
  //
  //What is the largest prime factor of the number 600851475143 ?
  //

  $n = 600851475143;
  $s = 2;

  while($s <= $n)
  {
    if($n % $s == 0)
    {
      $n /= $s;
    }

    $s += 1;
  }

  echo $s;

?>
