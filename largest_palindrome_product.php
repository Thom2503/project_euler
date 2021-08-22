<?php

  function check_reverse($n)
  {
    if(strrev(strval($n)) == strval($n))
    {
      return true;
    } else 
    {
      return false;
    }
  }

  $max = 0;
  $count = 0;

  foreach(range(100, 999) as $n1)
  {
    if($n1 * 999 < $max)
    {
      exit;
    }
    foreach(range(999, 100) as $n2)
    {
      $count += 1;
      if(check_reverse($n1 * $n2))
      {
        $max = $n1 * $n2;
      }    
    }
  }

  echo $max;

?>
