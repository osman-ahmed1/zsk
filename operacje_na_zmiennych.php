<?php
  echo PHP_VERSION,'<br>';
  echo 2**10,'<br>';  //1024

  $x=100;
  $y=10;
  echo $x <=> $y,
  '<br>';

  //równe
  $x=1;
  $y=1.0;
  if ($x == $y) {
    echo '$x równe $y';
  }else {
    echo '$x różne $y';
  }

  echo '<br>';

  if ($x === $y) {
    echo '$x identyczne $y';
  }else {
    echo '$x nieidentyczne $y';
  }




?>
