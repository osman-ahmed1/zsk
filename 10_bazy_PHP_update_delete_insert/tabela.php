<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
      .error-info{
        color: red;
      }
    </style>
  </head>
  <body>
    <?php
      if(isset($_GET['error']))
      {
        echo "
        <h4 class='error-info'>
          $_GET[error]
        </h4>";
      }
    ?>
    <h4>Użytkownicy</h4>
    <?php
      if(isset($_GET['error_id']))
      {
        if($_GET['error_id']==0)
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
          <td> <a href="./tabela.php?updateId=$row[user_id]">Edytuj</a> </td>
        <tr>
ROW;
      }
      echo '</table>';
      if (isset($_GET['addUser'])) {
        ?>
        <br><br>
        <h3>Dodawanie użytkownika</h3>
        <form class="" action="./skrypty/insert.php" method="post"><br><br>
          <input type="text" name="name" placeholder="Podaj imię"><br><br>
          <input type="text" name="surname" placeholder="Podaj nazwisko"><br><br>
          <input type="date" name="birthday" placeholder="Podaj datę urodzenia"><br><br>
          <select class="" name="city_id">
            <?php
            $sql = "SELECT * FROM city";
            $result = $connect->query($sql);
            while($city = $result->fetch_assoc())
            {
                echo "<option value='$city[city_id]'>$city[city]</option>";
            }


             ?>
          </select>
          <input type="submit" value="Dodaj"><br><br>
        </form>
        <?php
      }else{
        echo '<a href="tabela.php?addUser">Dodaj użytkownika</a>';
      }

      if(isset($_GET['updateId']) and !empty($_GET['updateId']))
      {
        $userQuery = $connect->query("SELECT * FROM user where user_id = $_GET[updateId]");
        if($userQuery->num_rows)
          {
            $user = $userQuery->fetch_assoc();


        ?>
        <h3>Edytuj użytkownika</h3>
        <form class="" action="./skrypty/update.php?id=<?php echo $user['user_id'] ?>" method="post"><br><br>
          <div>
            ID: <?php echo $user['user_id'] ?>
          </div><br><br>
          <input type="text" name="name" placeholder="Podaj imię" value="<?php echo $user['name'] ?>"><br><br>
          <input type="text" name="surname" placeholder="Podaj nazwisko" value="<?php echo $user['surname'] ?>"><br><br>
          <input type="date" name="birthday" placeholder="Podaj datę urodzenia" value="<?php echo $user['birthday'] ?>"><br><br>
          <select name="city_id">
            <?php
            $sql = "SELECT * FROM city";
            $result = $connect->query($sql);
            while($city = $result->fetch_assoc())
            {
                echo "<option value='$city[city_id]' ", ($city['city_id'] == $user['city_id']) ? "selected":"" ," >$city[city]</option>";
            }
            ?>
          </select>
          <input type="submit" value="Zaktualizuj"><br><br>
        </form>
        <?php
        }
      }

      $connect->close();
     ?>

  </body>
</html>
