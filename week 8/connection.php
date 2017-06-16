<?php
$dsn = 'mysql:host=localhost;dbname=php2017';
$db = new PDO($dsn, 'php2017');
$db->exec('SET CHARACTER SET UTF-8');
$db->exec('SET NAMES UTF-8');
?>