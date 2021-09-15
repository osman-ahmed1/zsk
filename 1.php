<?php
  echo "ZSK<br>";
  echo "ZSK<br>";
  $name = "Janusz";
  echo 'Imię: $name'; //echo 'Imię: $name';
  echo "Imię: $name"; //echo "Imię: Janusz";

  //konkatencaja .
  //interpolacja ,
  echo "text1"."text2";
  echo "text1","text2<br>";

  //typy danych
  //całkowity
  $całkowita = 10; //nie zapisujemy nazwy zmiennych z polskimi znakami
  $bin = 0b1011; //11
  $oct = 010; //8
  $hex = 0x10; //16
  echo $całkowita,'<br>';
  echo $oct,'<br>';
  echo $hex,'<br>';

  //logiczne
  $prawda = true; //1
  $falsz = false; //nic nie wyświetli
  echo $falsz;

  //składnia heredoc
  echo <<< ETYKIETA
  <hr>Imię: $name <br>
  Poznań<hr>

  ETYKIETA;


  $text = <<< ETYKIETA
  <hr>Imię: $name <br>
  Poznań<hr>
  ETYKIETA;
  echo $text;

 //nowdoc
  echo <<< 'ETYKIETA'
  <hr>
  NOWDOC <br>
  <hr>Imię: $name <br>
  Poznań
  <hr>
ETYKIETA;

  echo "Wartość zmiennej \$name wynosi: $name <br>";

 ?>
