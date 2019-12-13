<?php
if($net = $db->query("SELECT SUM(Amount) FROM Transactions_2019_12")){
  echo 'Sum successfully';
  print_r($net);
  //$db->query("SHOW columns FROM $net");

  //echo $net->fetch_array;

  while ($rows = mysqli_fetch_array($net, MYSQLI_NUM)) {
     var_dump($rows);
   }

} else {
  echo 'Failed in summation';
}
?>
