<?php

if ($result = $db->query("
RENAME TABLE
    Transactions_11_2019
TO
    Transactions_2019_11;
")){
  echo 'Table renamed.';
} else {
  echo 'Error, table not renamed.';
}
?>
