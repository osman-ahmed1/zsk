<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sredni wiek</title>
  </head>
  <body>
    <h3>Ilosc osob w rodzinie</h3>
    <?php
    if(isset($_POST['person']))
    {
      $count = $_POST['person'];
      for ($i=0; $i < $count; $i++)
      {
    ?>

          <input type="text" name="name <?php echo $i+1 ?>" value=""><br>

    <?php
      }
      ?>
      <input type="submit" value="Zatwierdz">

    <?php
  }else{

    ?>

    <form method="post">
      <input type="number" name="person" placeholder="Podaj ilość osób" >
      <input type="submit" value="Zatwierdz">
    </form>

    <?php
      }
     ?>
  </body>
</html>
