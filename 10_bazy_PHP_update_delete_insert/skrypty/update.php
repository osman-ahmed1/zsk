<?php
if(!empty($_GET['id']))
{
  if(!empty($_POST)){
  foreach ($_POST as $key => $value) {
    if(empty($value))
    {
        header('location: ../tabela.php?error=Wypełnij wszystkie pola');
        exit();
    }
  }
  require_once "connect.php";
  $sql = "UPDATE user SET name = '$_POST[name]', surname = '$_POST[surname]', birthday = '$_POST[birthday]', city_id = '$_POST[city_id]'
  WHERE user_id = $_GET[id]";
  $connect->query($sql) or die($connect->error);
    if($connect->affected_rows == 1)
      header('location: ../tabela.php?error=Zaktualizowano rekord');
    else
      header('location: ../tabela.php?error=Nie zaktualizowano rekordu');

    }else
        header("location: ../tabela.php?updateId=$_GET[id]");


}else
  header("location: ../tabela.php");

 ?>
