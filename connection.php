<?php

$sever_name = 'root';
$password = '';
$db_name = 'projects';

$db = new PDO(
    'mysql:host=localhost;dbname=' . $db_name,
    $sever_name,
    $password
);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
