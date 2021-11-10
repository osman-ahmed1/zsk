<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      if(isset($_GET['error']))
      {
        if($_GET['error']==0)
          echo "<h3>Usunięto rekord o id $_GET[deleted]</h3><br>";
        else
          echo "<h3>Nie usunięto rekordów</h3><br>";
      }
      require_once('./skrypty/connect.php');
      $sql = "SELECT * FROM user u left join city c on u.city_id = c.city_id";
      $result = $connect->query($sql);
      echo '<br><br>';
      $output = "";
      echo <<< TABLE
      <table>
        <tr>
          <th>ID</th>
          <th>Imię</th>
          <th>Nazwisko</th>
          <th>Data urodzenia</th>
          <th>Miasto</th>
        </tr>
TABLE;
      while($row = $result->fetch_assoc()){
        echo<<< ROW
        <tr>
          <td> $row[user_id] </td>
          <td> $row[name] </td>
          <td> $row[surname] </td>
          <td> $row[birthday] </td>
          <td> $row[city] </td>
          <td> <a href="./skrypty/delete.php?id=$row[user_id]">Usuń</a> </td>
        <tr>
ROW;
      }
      echo '</table>';
      $connect->close();
     ?>
  </body>
</html>
