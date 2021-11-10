<?php
  if(!empty($_POST)){
    foreach ($_POST as $key => $value) {
      if(empty($value))
      {
          header('location: ../tabela.php?error=Wypełnij wszystkie pola');
          exit();
      }
    }
    require_once "connect.php";
    $sql = "INSERT INTO user (name, surname, birthday, city_id) VALUES
    ('$_POST[name]', '$_POST[surname]', '$_POST[birthday]', '$_POST[city_id]')";
    $connect->query($sql) or die($connect->error);
    if($connect->affected_rows == 1)
    {
      header('location: ../tabela.php?error=Dodano rekord');
    }else{
      header('location: ../tabela.php?error=NIe dodano rekordu');
    }
  }else{
    header('location: ../tabela.php?addUser');
  }

 ?>
