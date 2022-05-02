<?php

require_once 'database.php';

$user_id = $_POST['id'];


$conn = mysqli_connect(db_host,db_user,db_password,db_name);

$sql = "SELECT * FROM 
        board_user WHERE user_id = '{$user_id}'";

$result = mysqli_query($conn,$sql);

if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $result_array[] = $row; 
        }
        if (isset($result_array)) {
            echo json_encode($result_array);
        } else {
            echo json_encode('loginFail');
        }
    } else {
        echo 'queryError';
    } 



