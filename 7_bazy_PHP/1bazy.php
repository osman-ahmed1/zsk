<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost","root","","4dg2_baza11");
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
      print_r($result);
      echo '<br><br>';
      $output = "";
      while($row = $result->fetch_assoc()){
        $output .= <<< "T"
        Imię i nazwisko: $row[name] $row[surname]
        Data urodzenia: $row[birthday]
        <hr>
T;
      }
      echo nl2br($output);
     ?>
  </body>
</html>
