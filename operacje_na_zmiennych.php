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

  echo '<br>';

  echo gettype($x),'<br>'; //integer
  echo gettype($y),'<br>'; //double

/*
  postinkrementacja $x++;
  preinkrementacja ++$x;
  postdekrementacja $x--;
  predekrementacja --$x;
*/

  $x = 10;
  $x = $x++; //10

  $y=$x++;
  // x = 11
  // y = 10
  echo $x,'<br>';
  echo $y,'<hr>';

  $x=1;
  echo $x; //1
  $x=$x++;
  echo $x; //1
  $x=++$x;
  echo $x; //2
  $y=++$x;
  echo $x; //3
  echo $y; //3
  $y=$x++;
  echo $x; //4
  echo "$y<br>"; //3





  ?>
