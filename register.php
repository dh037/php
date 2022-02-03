<?php

require_once 'database.php';

$user_id = $_POST['id'];
$user_pwd = $_POST['password'];
$user_nm = $_POST['name'];
$user_phone = $_POST['phone'];
$user_email = $_POST['email'];
$hobbies = $_POST['hobbies'];
$user_gender = $_POST['gender'];
$user_zip = $_POST['zip'];
$user_addr1 = $_POST['address1'];
$user_addr2 = $_POST['address2'];

$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "INSERT INTO board_user VALUES(
    '{$user_id}',
    '{$user_pwd}',
    '{$user_nm}',
    '{$user_phone}',
    '{$user_email}',
    '{$user_zip}',
    '{$user_addr1}',
    '{$user_addr2}',
    '{$user_gender}',
    '{$hobbies}',
    'Y',
    'N',
    now(),
    now()
    )";

$result = mysqli_query($conn,$sql);


echo $result;