<?php
require_once 'database.php';


$fp = fopen("./log_message.txt", "ab+");
fwrite($fp, json_encode($_SERVER)."\n");
fclose($fp);


// $user_id = $_POST['id'];
// $user_pw = $_POST['password'];






// echo md5('김동혁_'.microtime(true))."\n";
// echo md5('김동혁_'.microtime(true))."\n";
// echo time()."\n";
// echo md5('김동혁')."\n";
// echo md5('Kim Dong Hyurk');

// $conn = mysqli_connect(db_host,db_user,db_password,db_name);
// $sql = "SELECT * FROM board_user WHERE user_id='test01'";
// $result = mysqli_query($conn,$sql);


// if ($result) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $result_array[] = $row; 
//     }
//     if (isset($result_array)) {
//         echo json_encode($result_array);
//     } else {
//         echo json_encode('loginFail');
//     }
// } else {
//     echo 'queryError'; 
// } 