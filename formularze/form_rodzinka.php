<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sredni wiek</title>
  </head>
  <body>
    <?php
    if(isset($_GET['redirection'])){
    ?>
      <h2>Witaj z powrotem na stronie głównej</h2>
    <?php
    }
    if((!isset($_POST['person']) || empty($_POST['person'])) && !isset($_POST['buttonAvg']))
    {
    ?>
    <form method="post">
      <h3>Ilosc osob w rodzinie</h3>
      <input type="number" name="person" placeholder="Podaj ilość osób" >
      <input type="submit" value="Zatwierdz">
    </form>
    <?php
    }
    if (!empty($_POST['person']))
    {
      $count = $_POST['person'];
      echo "<h3>Ilosc osob w rodzinie: $count</h3>";
      echo '<form method="post">';
      for ($i=0; $i < $count; $i++)
      {
    ?>
        <input type="number" name="person<?php echo $i+1 ?>" placeholder="Podaj wiek osoby nr <?php echo $i+1 ?>"><br><br>

  <?php
      }
    ?>
      <input type="submit" value="Sredni wiek" name="buttonAvg">
    </form>
    <?php
      }
      if (isset($_POST['buttonAvg']))
      {
        $avg = 0;
        $count = 0;
        foreach ($_POST as $key => $value) {
          if(is_numeric($value))
          {
            $avg += $value;
            $count++;
          }
        }
        if($count>0){
          $avg /= $count;
          $avg_2decimal = number_format($avg,2);
          echo <<< AVERAGE
          <h3>Srednia wieku to $avg_2decimal</h3>
  AVERAGE;
    }else{
        echo "<h3>Błędne dane</h3>";
    }

?>
<br>
<a href="form_rodzinka.php?redirection">Strona głowna</a>
<?php
      }
     ?>

  </body>
</html>
