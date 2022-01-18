<?php

require_once 'database.php';

$data = json_decode(file_get_contents('php://input'), TRUE);

print_r($data);
exit;

print_r($_SERVER);
exit;

echo $_REQUEST['password'];
echo $_POST;
echo $_GET;