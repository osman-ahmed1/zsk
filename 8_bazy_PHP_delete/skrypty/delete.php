<?php
require_once('connect.php');
if(isset($_GET['id'])){
  $connect->query("DELETE FROM user WHERE user_id=$_GET[id]");
  echo "Usunięto ", $connect->affected_rows, " rekordów <br>";
  if($connect->affected_rows)
    header("location: ../tabela.php?error=0&deleted=$_GET[id]");
  else
    header("location: ../tabela.php?error=1");

}else{
  header("location: ../tabela.php");
}
