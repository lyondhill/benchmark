<?php

$con = new Redis();
// $con->connect($_SERVER['CACHE2_HOST'], $_SERVER['CACHE2_PORT']);
$con->connect('127.0.0.1', 6379);
$con->set('x', 'y');
if ($con->get('x') === 'y') {
  echo 'Test Succeeded';
} else {
  echo 'BONK!';
}

?>
