<?php

require_once 'database.php';

$user_id = $_POST['user_id'];
$user_pwd = $_POST['user_pwd'];
$user_phone = $_POST['user_phone'];
$user_email = $_POST['user_email'];

$conn = mysqli_connect(db_host,db_user,db_password,db_name);
$sql = "SELECT * FROM board_user WHERE user_id='{$user_id}' AND user_pwd='{$user_pwd}'";
$result = mysqli_query($conn,$sql);


while ($row = mysqli_fetch_assoc($result)) {
    $result_array[]=$row;    
}
echo json_encode($result_array);


