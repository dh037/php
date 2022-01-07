<?php

require_once 'database.php';

$user_email = $_POST['user_email'];
$hobbies = $_POST['hobbies'];
$user_zip = $_POST['user_zip'];
$user_addr1 = $_POST['user_addr1'];
$user_addr2 = $_POST['user_addr2'];
$user_use_yn = $_POST['user_use_yn'];
$user_id = $_POST['user_id'];

$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "UPDATE board_user SET
     user_email='{$user_email}',
     hobbies='{$hobbies}',
     user_zip='{$user_zip}',
     user_addr1='{$user_addr1}',
     user_addr2='{$user_addr2}',
     user_use_yn='{$user_use_yn}'
      WHERE user_id='{$user_id}'";

$result = mysqli_query($conn,$sql);

echo $result;
