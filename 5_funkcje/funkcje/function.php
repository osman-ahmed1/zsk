<?php
 function show()
 {
   echo "SHOW<br>";


 }

function show1($name)
{
  if(!empty($_POST[$name]))
    echo $_POST[$name];

}

/* zdefinuj funkcje stringValidate która wykona następujące działania:
1) usunie białe znaki (trim)
2) zmieni pierwszą literę na dużą (ucfirst)
3) od drugiej litery małe znaki strtolower
4) drugi parametr będzie określał długość stringa (substr)
*/

function stringValidate($str, $len = false)
{
  $str = trim($str);
  $str = strtolower($str);
  $str = ucfirst($str);
  $str = substr($str,0,$len ?: strlen($str));
  return $str;
}


 ?>
