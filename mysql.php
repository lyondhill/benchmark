<?php
$con = mysql_connect($_SERVER['DATABASE1_HOST'].":".$_SERVER['DATABASE1_PORT'],$_SERVER['DATABASE1_USER'],$_SERVER['DATABASE1_PASS']);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  
mysql_select_db($_SERVER['DATABASE1_NAME'], $con);

$result1 = mysql_query("SELECT value FROM core_config_data WHERE path = 'web/cookie/cookie_lifetime' AND scope = 'default' AND scope_id = 0");

$result2 = mysql_query("SELECT value FROM core_config_data WHERE path='atb/stores/store_ip'");

echo 'Test Succeeded';

mysql_close($con);
?>
