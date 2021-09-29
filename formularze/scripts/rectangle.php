<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Kwadrat</title>
  </head>
  <body>
    <h3>Kwadrat</h3>
    <form method="get">
      <input type="text" name="sideA" placeholder="Podaj bok a:"><br><br>
      <input type="text" name="sideB" placeholder="Podaj bok b:"><br><br>
      <input type="submit" name="button" value="Oblicz">
    </form>
    <?php
    if(isset($_GET['button']))
    {
      if (!empty($_GET['sideA']) && !empty($_GET['sideB'])) {

        $a = str_replace(',','.',$_GET['sideA']);
        $b = str_replace(',','.',$_GET['sideB']);
        if($a<=0 || $b<=0){
          echo "Liczby muszą być dodatnie";
        }else{

                  $area = $a * $b;
                  $circuit = $a*2 + $b*2;
                  echo <<<RES
                  <hr>
                  Pole prostokąta wynosi: $area cm<sup>2</sup><br>
                  Obwód prostokąta wynosi: $circuit cm
          RES;
        }
    }else{
      echo "Wypełnij boki";
    }
  };
     ?>

  </body>
</html>
