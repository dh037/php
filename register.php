<?php

require_once 'database.php';

$user_id = $_POST['id'];
$user_pwd = $_POST['password'];
$user_nm = $_POST['name'];
$user_phone = $_POST['phone'];
$user_email = $_POST['email'];
$user_zip = $_POST['zip'];
$user_addr1 = $_POST['address1'];
$user_addr2 = $_POST['address2'];
//$user_gender = $_POST['gender'];
//$user_hobbies = $_POST['hobbies'];
// admin use_yn, create_data, update_date


//   '{$user_gender}', '{$user_hobbies}
$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "INSERT INTO board_user values(
    '{$user_id}',
    '{$user_pwd}',
    '{$user_nm}',
    '{$user_phone}',
    '{$user_email}',
    '{$user_zip}',
    '{$user_addr1}',
    '{$user_addr2}',
    'M',
    '축구, 농구, 배구',
    'Y',
    'N',
    now(),
    now()
    )";
$result = mysqli_query($conn,$sql);


echo $result;