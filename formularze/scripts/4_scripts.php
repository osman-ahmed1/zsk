<?php
  // echo '<pre>';
  // print_r ($_POST);
  // echo '</pre>';

if (!empty($_POST['name']) && !empty($_POST['geometricFigure'])) {

  switch ($_POST['geometricFigure']) {
    case 'kwadrat':
      header('location: ./square.php');
      break;
    case 'prostokat':
    header('location: ./rectangle.php');
    break;
    default:
      header('location: ../4_form.php');
      break;
  }

}else {

  ?>
<script type="text/javascript">

  history.back();
</script>
<?php
}
 ?>


 ?>
