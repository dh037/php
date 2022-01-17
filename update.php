<?php

require_once 'database.php';

$user_email = $_POST['email'];
//$hobbies = $_POST['hobbies'];
$user_zip = $_POST['zip'];
$user_addr1 = $_POST['address1'];
$user_addr2 = $_POST['address2'];
// $user_use_yn = $_POST['user_use_yn'];
$user_id = $_POST['id'];


//      hobbies='{$hobbies}',      user_use_yn='{$user_use_yn}'
$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "UPDATE board_user SET
     user_email='{$user_email}',
     user_zip='{$user_zip}',
     user_addr1='{$user_addr1}',
     user_addr2='{$user_addr2}'
      WHERE user_id='{$user_id}'";


$result = mysqli_query($conn,$sql);

echo $result;
