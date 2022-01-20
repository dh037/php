<?php

require_once 'database.php';

$user_id = $_POST['id'];
$admin = $_POST['admin'];

$conn = mysqli_connect(db_host,db_user,db_password,db_name);

$sql = "UPDATE board_user SET
     user_admin='{$admin}'
      WHERE user_id='{$user_id}'";

$result = mysqli_query($conn,$sql);

echo $result;