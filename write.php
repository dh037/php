<?php
header('Content-Type: application/json');
require_once 'database.php';

$user = $_POST['user'];

$fp = fopen("./log.txt", "a");
fwrite($fp,$user."\n".json_encode($_SERVER)."\n\n");
fclose($fp);




