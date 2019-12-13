<?php
if($result = $db->query("
CREATE TABLE Transactions_2019_12 LIKE Transactions_2019_11;
")){
echo 'Successfully copied a table.<\br>';
} else{
echo 'Failed in copying a table.<\br>';
}
?>
