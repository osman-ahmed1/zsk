<?php
//date()
setlocale(LC_ALL, 'Polish');
echo "dzień-miesiąc-rok: ". date('d-m-Y').'<br>';
echo date('m-d-y').'<br>';
echo date('d-M-Y').'<br>';
echo date('d-F-Y').'<br>';
echo strftime('%A %B').'<br>';
echo strftime('%d %B %Y').'<br>';
echo date('d:i:s').'<br>';
echo date('H:i:s').'<br>';
echo date('H:i:sa').'<br>';

//getdate()
$date = getdate();

echo '<pre>';
print_r($date);
echo '</pre>';

echo $date['wday'].'<br>'; //3
echo $date['yday'].'<br>'; //292

// rok przestępny

echo date('L').'<br>'; // 0 - nie przestępny
// mktime
$lastYear =   mktime(0, 0, 0, 3, 0, 2000);
echo $lastYear.'<br>';     // 951778800

$today = mktime(0,0,0,date('m'),date('y'),date('d'));
echo $today.'<br>';
$year = $today/(60*60*24*365);
echo (int)$year.'<br>'; //50


 ?>
<script>
  // setTimeout(()=>{
  //   window.location.reload();
  //
  // },1000);
</script>
