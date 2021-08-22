<?php
  
  $limit = 1000;

  $Numbers = [];

  for($i = 0; $i < $limit; $i++)
  {
    if($i % 3 == 0 || $i % 5 == 0)
    {
      array_push($Numbers, $i);
    }
  }

  echo array_sum($Numbers);

?>
